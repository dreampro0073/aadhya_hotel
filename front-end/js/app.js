var app = angular.module('app', [

]);

var base_url = 'http://localhost:8888/shri_tech/public/';

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
        discount_amount:0,
        no_of_rooms:1,
        
    };

    $scope.hours = [];
    $scope.types = [];

    $scope.init = function(){
        $scope.processing = true;
        DBService.postCall({},'api/rooms/avail-init').then(function(data){
            if(data.success){
                $scope.types = data.types;
                $scope.hours = data.hours;
            }
        });
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
        DBService.postCall($scope.formData,'api/rooms/book-room').then(function(data){
            if(data.success){
                $scope.createOrder(data.entery);
            }else{
                alert(data.message);
            }
        });
    }

    $scope.createOrder = function(entry){
        $scope.placing_order = true;
        DBService.postCall({
            entry: entry,
        },'api/payment/create-order').then(function(data){
            $scope.placing_order = false;
            if (data.success) {
                window.location.href = data.redirect_url;
                // window.location.href = res.data.data.instrumentResponse.redirectInfo.url;
            } else {
                alert('Payment failed');
                $scope.placing_order = false;
            }
        });
    }

});