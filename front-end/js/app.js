var app = angular.module('app', [
    'jcs-autoValidate',
]);
app.directive('convertToNumber', function() {
  return {
    require: 'ngModel',
    link: function(scope, element, attrs, ngModel) {
      ngModel.$parsers.push(function(val) {
        return val != null ? parseInt(val, 10) : null;
      });
      ngModel.$formatters.push(function(val) {
        return val != null ? '' + val : null;
      });
    }
  };
});

// var base_url = 'http://localhost:8888/shri_tech/public/';
var base_url = 'https://aadhyasriwebsolutions.com/';

app.service('DBService', function($http, $rootScope){

    this.getCall = function(route){

        var promise = $http({
            method: 'GET',
            url: base_url + route,
        })
        .then(function(response) {
            console.log(response);
            if(response.status == 200){
                if(response.data.success){
                    return response.data;
                } else {
                    return response.data;
                }
            }
        });
        return promise;
    }

    this.postCall = function(data, route ){
        var promise = $http({
            method: 'POST',
            url: base_url + route,
            data: data
        })
        .then(function(response) {
            if(response.status == 200){
              if(response.data.success){
                  return response.data;
              } else {
                  return response.data;
              }
            }
        });
        return promise;
    }

});

app.controller('bookCtrl',function($scope , $http, $timeout , DBService){
    
    $scope.formData = {
        name:'',
        mobile:"",
        paid_amount:0,
        total_amount:0,
        no_of_day:'',
        no_of_rooms:1,
        hours_occ:12,
        type:3,
        
    };

    $scope.processing = false;
    $scope.show_form = true;
    $scope.booked_entry = {};

    $scope.entry_id = 0;
    $scope.hours = [];
    $scope.types = [];
    $scope.selectedRoom = {};

    $scope.resetData = () => {
        $scope.formData = {
            name:'',
            mobile:"",
            paid_amount:0,
            total_amount:0,
            no_of_day:'',
            no_of_rooms:1,
            hours_occ:12,
            type:3,
        };

        $scope.processing = false;
        $scope.show_form = true;
        $scope.booked_entry = {};

        $scope.entry_id = 0;
        $scope.hours = [];
        $scope.types = [];
        $scope.selectedRoom = {};

        $scope.init();
    }

    $scope.roomData = [

        {
            type:3,
            name: 'Double Bed Room',
            tag: 'Double Bed',
            price: 899,
            img: 'https://hotel.aadhyasriwebsolutions.com/wp-content/themes/aadhya_theme/front-end/images/pic1e.jpeg',
            ideal: 'Couples & guests',
            desc: 'Spacious rooms with cozy bedding, clean interiors and peaceful atmosphere.'
        },

        {
            type:2,
            name: 'Single Cabin',
            tag: 'Single Cabin',
            price: 399,
            img: 'https://hotel.aadhyasriwebsolutions.com/wp-content/themes/aadhya_theme/front-end/images/pic1f.jpeg',
            ideal: 'Solo travelers',
            desc: 'Private, well-designed cabins for short stays with calm environment.'
        },

        {
            type:1,
            name: 'Single Pod',
            tag: 'Single Pod',
            price: 299,
            img: 'https://hotel.aadhyasriwebsolutions.com/wp-content/themes/aadhya_theme/front-end/images/pic1c.jpeg',
            ideal: 'Transit travelers',
            desc: 'Modern capsule-style pods for quick rest and budget-friendly stays.'
        }
    ];

  

    $scope.init = function(){
        
        DBService.postCall({},'api/rooms/avail-init').then(function(data){
            if(data.success){
                $scope.types = data.types;
                $scope.hours = data.hours;
            }

            $scope.selectRoom(3)
        });
    }




    $scope.selectRoom = (type) => {
        $scope.formData.type = type;
        if($scope.formData.type == 3 && $scope.formData.hours_occ == 6){
            $scope.formData.hours_occ = 12;
        }
        let findData = $scope.roomData.find(room => room.type == type);
        // console.log(findData);
        if(findData){
            $scope.selectedRoom = findData;
        }

        $scope.changeAmount();
    }

    $scope.changeAmount = function() {
        if($scope.formData.hours_occ > 0 && $scope.formData.type > 0 && $scope.formData.no_of_rooms > 0){

            $scope.checkoutTime();

            DBService.postCall($scope.formData,'api/rooms/get-amount').then(function(data){
                if(data.success){
                    $scope.formData.total_amount = data.total_amount;
                    $scope.formData.booking_amount = data.booking_amount;
                    
                }
            });

        }
    }
    $scope.checkoutTime = function(){
        if($scope.formData.check_in !=''){
            DBService.postCall($scope.formData,'api/rooms/get-checkout-time').then(function(data){
                if(data.success){
                    $scope.formData.checkout_time = data.checkout_time;
                }
            });

        }
    }

    $scope.onSubmit = function(){
        $scope.processing = true;
        DBService.postCall($scope.formData,'api/rooms/book-room').then(function(data){
            if(data.success){
                $scope.processing = false;
                $scope.show_form = false;
                $scope.booked_entry = data.booked_entry;
                // $scope.entry_id = data.entry_id;
                // $scope.createOrder();
            }else{
                $scope.processing = false;
                alert(data.message);
            }
        });
    }

    $scope.createOrder = function(){
        $scope.placing_order = true;
        DBService.postCall({entry_id:$scope.entry_id},'api/payment/create-order').then(function(data){
            $scope.placing_order = false;
            if (data.success) {
                window.location.href = data.redirect_url;
            } else {
                alert('Payment failed');
                $scope.placing_order = false;
            }
        });
    }

});