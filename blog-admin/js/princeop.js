function ge(el){
  return document.getElementById(el);
}

function ajax_changetab_and_send_data5(php_file, el, send_data){
  var hr=new XMLHttpRequest();
  hr.open('POST', php_file, true);
  hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  hr.onreadystatechange=function(){
      if(hr.readyState==4 && hr.status==200){
          ge(el).innerHTML=hr.responseText;
      }
  };

  hr.send(send_data);
}

function ajax_changetab_and_send_data6(php_file, el, send_data){
  var hr=new XMLHttpRequest();
  hr.open('POST', php_file, true);
  hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  hr.onreadystatechange=function(){
      if(hr.readyState==4 && hr.status==200){
          ge(el).innerHTML=hr.responseText;
      }
  };

  hr.send(send_data);
};

function ajax_changetab_and_send_data7(php_file, el, send_data){
  var hr=new XMLHttpRequest();
  hr.open('POST', php_file, true);
  hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  hr.onreadystatechange=function(){
      if(hr.readyState==4 && hr.status==200){
          ge(el).value=hr.responseText;
      }
  };

  hr.send(send_data);
};





function Ben_way_to_get_element(el){
  return document.getElementById(el);
}

function ajax_changetab_and_send_data(php_file, el, send_data){
  var hr=new XMLHttpRequest();
  hr.open('POST', php_file, true);
  hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  hr.onreadystatechange=function(){
      if(hr.readyState==4 && hr.status==200){
          Ben_way_to_get_element(el).innerHTML=hr.responseText;
      }
  };

  hr.send(send_data);
}

function ajax_changetab_and_send_data1(php_file, el, send_data){
  var hr=new XMLHttpRequest();
  hr.open('POST', php_file, true);
  hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  hr.onreadystatechange=function(){
      if(hr.readyState==4 && hr.status==200){
          Ben_way_to_get_element(el).value=hr.responseText;
      }
  };

  hr.send(send_data);
}

  function login1(){
  Ben_way_to_get_element('alert1').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Authenticating …</div>";

  var username=$('#username').val();
  var password=$('#password').val();
  
  $.ajax({
      type:'POST',
      url:'pages/login/login.php',
      data:{
          username:username,
          password:password,
  
      },
      
      success: function (response){
          $("#alert1").html(response);
      }
  
  });
  }

        function branchupdate(branch_no){
        var branch_no=Ben_way_to_get_element(branch_no).innerHTML;
        
        
        var send_data1=
                "&branch_no="+branch_no;
      
      
        ajax_changetab_and_send_data('branchupdate.php', 'branch_loader', send_data1)
      
      }

                        function updatebranchphp()
                        {

                    Ben_way_to_get_element('branch_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Authenticating …</div>";
                
                    var branch_no=Ben_way_to_get_element('branch_no').value;
                    var branch_name=Ben_way_to_get_element('branch_name').value;
                    var branch_manager=Ben_way_to_get_element('branch_manager').value;
                    var company_no=Ben_way_to_get_element('company_no').value;
                    var branch_email=Ben_way_to_get_element('branch_email').value;
                    var branch_province=Ben_way_to_get_element('branch_province').value;
                    var branch_district=Ben_way_to_get_element('branch_district').value;
                    var branch_sector=Ben_way_to_get_element('branch_sector').value;
                    var branch_cell=Ben_way_to_get_element('branch_cell').value;
                
                    
                    
                    var send_data1=
                            "&branch_no="+branch_no+
                            "&branch_name="+branch_name+
                            "&branch_manager="+branch_manager+
                            "&company_no="+company_no+
                            "&branch_province="+branch_province+
                            "&branch_district="+branch_district+
                            "&branch_sector="+branch_sector+
                            "&branch_cell="+branch_cell+
                            "&branch_email="+branch_email;
                
                
                    ajax_changetab_and_send_data('updatebranchphp.php', 'branch_message', send_data1)
                
                }



                function companyupdate(company_no)
                {
        var company_no=Ben_way_to_get_element(company_no).innerHTML;
        
        
        var send_data1=
                "&company_no="+company_no;
      
      
        ajax_changetab_and_send_data('companyupdate.php', 'company_loader', send_data1)
      
      }

                        function updatecompanyphp()

                        {

                    Ben_way_to_get_element('companyupdate_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Authenticating …</div>";
                
                    var company_no=Ben_way_to_get_element('company_no').value;
                    var company_name=Ben_way_to_get_element('company_name').value;
                    var company_mail=Ben_way_to_get_element('company_mail').value;
                    var company_password=Ben_way_to_get_element('company_password').value;
                    var company_tin=Ben_way_to_get_element('company_tin').value;
                    var company_manager=Ben_way_to_get_element('company_manager').value;
                    var company_contact=Ben_way_to_get_element('company_contact').value;
                    var company_province=Ben_way_to_get_element('company_province').value;
                    var company_district=Ben_way_to_get_element('company_district').value;
                    var company_sector=Ben_way_to_get_element('company_sector').value;
                    var company_cell=Ben_way_to_get_element('company_cell').value;
                
                    
                    
                    var send_data1=
                            "&company_no="+company_no+
                            "&company_name="+company_name+
                            "&company_mail="+company_mail+
                            "&company_password="+company_password+
                            "&company_tin="+company_tin+
                            "&company_province="+company_province+
                            "&company_district="+company_district+
                            "&company_sector="+company_sector+
                            "&company_cell="+company_cell+
                            "&company_manager="+company_manager+
                            "&company_contact="+company_contact;
                
                
                    ajax_changetab_and_send_data('updatecompanyphp.php', 'companyupdate_message', send_data1)
                
                }



                function userupdate(user_no)
                {
        var user_no=Ben_way_to_get_element(user_no).innerHTML;
        
        
        var send_data1=
                "&user_no="+user_no;
      
      
        ajax_changetab_and_send_data('userupdate.php', 'user_loader', send_data1)
      
      }


                 function profile_user_update(user_no)
                {
        var user_no=Ben_way_to_get_element(user_no).innerHTML;
        
        
        var send_data1=
                "&user_no="+user_no;
      
      
        ajax_changetab_and_send_data('profile_update.php', 'profile_loader', send_data1)
      
      }

      function company_profile_update(company_no)
                {
        var company_no=Ben_way_to_get_element(company_no).innerHTML;
        
        
        var send_data1=
                "&company_no="+company_no;
      
      
        ajax_changetab_and_send_data('update_settings.php', 'company_profile_loader', send_data1)
      
      }

 

        function updatecompanyphp() {
          Ben_way_to_get_element('companyupdate_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Company Data . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var company_no = Ben_way_to_get_element('company_no').innerHTML;
          var company_name=Ben_way_to_get_element('company_name').value;
          var company_mail=Ben_way_to_get_element('company_mail').value;
          var company_password=Ben_way_to_get_element('company_password').value;
          var company_tin=Ben_way_to_get_element('company_tin').value;
          var company_manager=Ben_way_to_get_element('company_manager').value;
          var company_contact=Ben_way_to_get_element('company_contact').value;
          var company_province=Ben_way_to_get_element('company_province').value;
          var company_district=Ben_way_to_get_element('company_district').value;
          var company_sector=Ben_way_to_get_element('company_sector').value;
          var company_cell=Ben_way_to_get_element('company_cell').value;
          var logo = Ben_way_to_get_element('logo').files[0];

          formdata.append('company_no', company_no);
          formdata.append('company_name', company_name);
          formdata.append('company_tin', company_tin);
          formdata.append('company_manager', company_manager);
          formdata.append('company_contact', company_contact);
          formdata.append('company_province', company_province);
          formdata.append('company_district', company_district);
          formdata.append('company_sector', company_sector);
          formdata.append('company_cell', company_cell);
          formdata.append('logo', logo);

          ajax1.open('POST', 'updatecompanyphp.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('companyupdate_message').innerHTML = ajax1.responseText;

          };
        }

        function company_profile_update_data() {
          Ben_way_to_get_element('company_succesufuly_update_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Company Data . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var company_no = Ben_way_to_get_element('company_no').innerHTML;
          var company_name=Ben_way_to_get_element('company_name').value;
          var company_mail=Ben_way_to_get_element('company_mail').value;
          var company_password=Ben_way_to_get_element('company_password').value;
          var company_tin=Ben_way_to_get_element('company_tin').value;
          var company_manager=Ben_way_to_get_element('company_manager').value;
          var company_contact=Ben_way_to_get_element('company_contact').value;
          var company_province=Ben_way_to_get_element('company_province').value;
          var company_district=Ben_way_to_get_element('company_district').value;
          var company_sector=Ben_way_to_get_element('company_sector').value;
          var company_cell=Ben_way_to_get_element('company_cell').value;
          var logo = Ben_way_to_get_element('logo').files[0];

          formdata.append('company_no', company_no);
          formdata.append('company_name', company_name);
          formdata.append('company_mail', company_mail);
          formdata.append('company_password', company_password);
          formdata.append('company_tin', company_tin);
          formdata.append('company_manager', company_manager);
          formdata.append('company_contact', company_contact);
          formdata.append('company_province', company_province);
          formdata.append('company_district', company_district);
          formdata.append('company_sector', company_sector);
          formdata.append('company_cell', company_cell);
          formdata.append('logo', logo);

          ajax1.open('POST', 'setting_profile_update.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('company_succesufuly_update_message').innerHTML = ajax1.responseText;

          };
        }


        function updateuserphp() {
          Ben_way_to_get_element('userupdate_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating user …</div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var user_no = Ben_way_to_get_element('user_no').innerHTML;
          var first_name=Ben_way_to_get_element('first_name').value;
          var last_name=Ben_way_to_get_element('last_name').value;
          var email=Ben_way_to_get_element('email').value;
          var password=Ben_way_to_get_element('password').value;
          var user_contact=Ben_way_to_get_element('user_contact').value;
          var user_profile = Ben_way_to_get_element('user_profile').files[0];

          formdata.append('user_no', user_no);
          formdata.append('first_name', first_name);
          formdata.append('last_name', last_name);
          formdata.append('email', email);
          formdata.append('password', password);
          formdata.append('user_contact', user_contact);
          formdata.append('user_profile', user_profile);

          ajax1.open('POST', 'updateuserphp.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('userupdate_message').innerHTML = ajax1.responseText;

          };
        }




                function priceupdate(price_no)
                {
        var price_no=Ben_way_to_get_element(price_no).innerHTML;
        
        
        var send_data1=
                "&price_no="+price_no;
      
      
        ajax_changetab_and_send_data('updateprice.php', 'price_loader', send_data1)
      
      }

                  function updatepricephp()

                        {

                    Ben_way_to_get_element('priceupdate_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Authenticating …</div>";
                
                    var price_no=Ben_way_to_get_element('price_no').value;
                    var price_name=Ben_way_to_get_element('price_name').value;
                    var price_amount=Ben_way_to_get_element('price_amount').value;
                    var purchase_price_amount=Ben_way_to_get_element('purchase_price_amount').value;

                    var send_data1=
                            "&price_no="+price_no+
                            "&price_name="+price_name+
                            "&purchase_price_amount="+purchase_price_amount+
                            "&price_amount="+price_amount;

                    ajax_changetab_and_send_data('updatepricephp.php', 'priceupdate_message', send_data1)
                
                }

      function user_settings() {
          Ben_way_to_get_element('user_setting_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating and uploading user data . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var user_no = Ben_way_to_get_element('user_no').innerHTML;
          var first_name=Ben_way_to_get_element('first_name').value;
          var last_name=Ben_way_to_get_element('last_name').value;
          var email=Ben_way_to_get_element('email').value;
          var password=Ben_way_to_get_element('password').value;
          var user_contact=Ben_way_to_get_element('user_contact').value;
          var user_profile = Ben_way_to_get_element('user_profile').files[0];

          formdata.append('user_no', user_no);
          formdata.append('first_name', first_name);
          formdata.append('last_name', last_name);
          formdata.append('email', email);
          formdata.append('password', password);
          formdata.append('user_contact', user_contact);
          formdata.append('user_profile', user_profile);

          ajax1.open('POST', 'settings_update.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('user_setting_message').innerHTML = ajax1.responseText;

          };
        }

        function company_update_settings()

                        {

                    Ben_way_to_get_element('company_setting_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Authenticating …</div>";
                
                    var company_no=Ben_way_to_get_element('company_no').value;
                    var company_name=Ben_way_to_get_element('company_name').value;
                    var company_tin=Ben_way_to_get_element('company_tin').value;
                    var company_mail=Ben_way_to_get_element('company_mail').value;
                    var company_password=Ben_way_to_get_element('company_password').value;
                    var company_manager=Ben_way_to_get_element('company_manager').value;
                    var company_province=Ben_way_to_get_element('company_province').value;
                    var company_district=Ben_way_to_get_element('company_district').value;
                    var company_sector=Ben_way_to_get_element('company_sector').value;
                    var company_cell=Ben_way_to_get_element('company_cell').value;
                    var company_contact=Ben_way_to_get_element('company_contact').value;

                    var send_data1=
                            "&company_no="+company_no+
                            "&company_name="+company_name+
                            "&company_tin="+company_tin+
                            "&company_mail="+company_mail+
                            "&company_password="+company_password+
                            "&company_manager="+company_manager+
                            "&company_province="+company_province+
                            "&company_district="+company_district+
                            "&company_sector="+company_sector+
                            "&company_cell="+company_cell+
                            "&company_contact="+company_contact;

                    ajax_changetab_and_send_data('company_settings_update.php', 'company_setting_message', send_data1)
                
                }
        

              function branch_update_settings() {
          Ben_way_to_get_element('branch_setting_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Branch Data . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var branch_no = Ben_way_to_get_element('branch_no').innerHTML;
          var branch_name=Ben_way_to_get_element('branch_name').value;
          var branch_email=Ben_way_to_get_element('branch_email').value;
          var branch_password=Ben_way_to_get_element('branch_password').value;
          var branch_manager=Ben_way_to_get_element('branch_manager').value;
          var branch_province=Ben_way_to_get_element('branch_province').value;
          var branch_district=Ben_way_to_get_element('branch_district').value;
          var branch_sector=Ben_way_to_get_element('branch_sector').value;
          var branch_cell=Ben_way_to_get_element('branch_cell').value;
          var profile = Ben_way_to_get_element('profile').files[0];

          formdata.append('branch_no', branch_no);
          formdata.append('branch_name', branch_name);
          formdata.append('branch_email', branch_email);
          formdata.append('branch_password', branch_password);
          formdata.append('branch_manager', branch_manager);
          formdata.append('branch_province', branch_province);
          formdata.append('branch_district', branch_district);
          formdata.append('branch_sector', branch_sector);
          formdata.append('branch_cell', branch_cell);
          formdata.append('profile', profile);

          ajax1.open('POST', 'branch_settings_update.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('branch_setting_message').innerHTML = ajax1.responseText;

          };
        }



                function newchat(branch_no){
        var branch_no=Ben_way_to_get_element(branch_no).innerHTML;
        
        
        var send_data1=
                "&branch_no="+branch_no;
      
      
        ajax_changetab_and_send_data('chat.php', 'chat_loader', send_data1)
      
      }

                       



                function dayreport(tank_no){
        var tank_no=Ben_way_to_get_element(tank_no).innerHTML;
        
        
        var send_data1=
                "&tank_no="+tank_no;
      
      
        ajax_changetab_and_send_data('addreport.php', 'day_loader', send_data1)
      
      }
                  function newreportphp()
                        {

                    Ben_way_to_get_element('report_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Authenticating …</div>";
                
                    var tank_no=Ben_way_to_get_element('tank_no').value;
                    var price_name=Ben_way_to_get_element('price_name').value;
                    var input_no=Ben_way_to_get_element('input_no').value;
                    var output_no=Ben_way_to_get_element('output_no').value;
                    var tank_amount=Ben_way_to_get_element('tank_amount').value;
                    var tank_capacity=Ben_way_to_get_element('tank_capacity').value;     
                }



              function deposit_tank(tank_no){
        var tank_no=Ben_way_to_get_element(tank_no).innerHTML;
        
        
        var send_data1=
                "&tank_no="+tank_no;
      
      
        ajax_changetab_and_send_data('add_deposit_tank_report.php', 'deposit_tank_report_loader', send_data1)
      
      }
                  function newreportphp()
                        {

                    Ben_way_to_get_element('report_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Authenticating …</div>";
                
                    var tank_no=Ben_way_to_get_element('tank_no').value;
                    var price_name=Ben_way_to_get_element('price_name').value;
                    var input_no=Ben_way_to_get_element('input_no').value;
                    var output_no=Ben_way_to_get_element('output_no').value;
                    var tank_amount=Ben_way_to_get_element('tank_amount').value;
                    var tank_capacity=Ben_way_to_get_element('tank_capacity').value;      
                }




                function viewcompany(company_no){
        var company_no=Ben_way_to_get_element(company_no).innerHTML;
        
        
        var send_data1=
                "&company_no="+company_no;
      
      
        ajax_changetab_and_send_data('companyview.php', 'company_loader', send_data1)
      
      }

             function view_invoice(company_no){
        var company_no=Ben_way_to_get_element(company_no).innerHTML;
        
        
        var send_data1=
                "&company_no="+company_no;
      
      
        ajax_changetab_and_send_data('invoice.php', 'invoice_loader', send_data1)
      
      }


       function view_analysed_invoice(company_no){
        var company_no=Ben_way_to_get_element(company_no).innerHTML;
        
        
        var send_data1=
                "&company_no="+company_no;
      
      
        ajax_changetab_and_send_data('analysed_invoice.php', 'analysed_invoice_loader', send_data1)
      
      }

            function deposit_view(company_no){
        var company_no=Ben_way_to_get_element(company_no).innerHTML;
        
        
        var send_data1=
                "&company_no="+company_no;
      
      
        ajax_changetab_and_send_data('deposit_report.php', 'deposit_view_loader', send_data1)
      
      }     

             function normal_tank_view(company_no){
        var company_no=Ben_way_to_get_element(company_no).innerHTML;
        
        
        var send_data1=
                "&company_no="+company_no;
      
      
        ajax_changetab_and_send_data('normal_tank.php', 'normal_tank_view_loader', send_data1)
      
      }


                function fuel_more_details(company_no){
        var company_no=Ben_way_to_get_element(company_no).innerHTML;
        
        
        var send_data1=
                "&company_no="+company_no;
      
      
        ajax_changetab_and_send_data('fuel_details.php', 'details_fuel_loader', send_data1)
      
      }

                      


          function runprice(){
    var price_name=Ben_way_to_get_element('price_name').value;
            
        var send_data1=
                "&price_name="+price_name;
      
        ajax_changetab_and_send_data('runprice.php', 'fuel_price', send_data1)


}


     function viewrequest(invoice_no){
        var invoice_no=Ben_way_to_get_element(invoice_no).innerHTML;
        
        
        var send_data1=
                "&invoice_no="+invoice_no;
      
      
        ajax_changetab_and_send_data('requestview.php', 'requestview_loader', send_data1)
      
      }   

                    function viewrequestupdate()
                        {

                    Ben_way_to_get_element('request_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Redirecting …</div>";
                
                    var invoice_no=Ben_way_to_get_element('invoice_no').value;
                

                     var send_data1=
                            "&invoice_no="+invoice_no;

                    ajax_changetab_and_send_data('viewrequestupdate.php', 'request_message', send_data1)
                }



                 function viewreport(report_no){
        var report_no=Ben_way_to_get_element(report_no).innerHTML;
        
        
        var send_data1=
                "&report_no="+report_no;
      
      
        ajax_changetab_and_send_data('reportview.php', 'reportview_loader', send_data1)
      
      }   

                     function viewreportupdate()
                        {

                    Ben_way_to_get_element('report_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Approving Your Daily Report ...</div>";
                
                    var report_no=Ben_way_to_get_element('report_no').value;
                

                     var send_data1=
                            "&report_no="+report_no;
                       
                            

                    ajax_changetab_and_send_data('viewreportupdate.php', 'report_message', send_data1)
                }


                      function view_seen_report(report_no){
        var report_no=Ben_way_to_get_element(report_no).innerHTML;
        
        
        var send_data1=
                "&report_no="+report_no;
      
      
        ajax_changetab_and_send_data('see_report_view.php', 'seen_report_view_loader', send_data1)
      
      }



                 function view_normal_receipt(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('normal_receipt_details.php', 'normal_receipt_view_loader', send_data1)
      
      }

              function rra_view_invoice(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('invoice_view_details.php', 'rra_invoice_view', send_data1)
      
      }

                  function view_expenses_details(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('sales_expense_rate_view.php', 'company_expense_view_loader', send_data1)
      
      }

                  function branch_view_receipt(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('branch_approve_sales.php', 'branch_view_receipt_loader', send_data1)
      
      }



                  function branch_view_approved_receipt(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('branch_approved_details.php', 'branch_approved_view_receipt_loader', send_data1)
      
      }


              function view_training_receipt(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('training_receipt_details.php', 'training_receipt_view_loader', send_data1)
      
      }

               function view_proforma_receipt(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('proforma_receipt_details.php', 'proforma_receipt_view_loader', send_data1)
      
      }


               function normal_refunds(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('normal_refund_view.php', 'normal_refund_loader', send_data1)
      
      }


      function training_refunds(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('training_refund_view.php', 'training_refund_loader', send_data1)
      
      }


      function refund(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('make_refund.php', 'do_refund_loader', send_data1)
      
      }

             function print_invoice(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('normal_sale_copy_print_page.php', 'print_invoice_loader', send_data1)
      
      }

          function print_training_copy(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('training_sale_copy_print_page.php', 'training_copy_sale_loader', send_data1)
      
      }


      function print_proforma_copy(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('proforma_sale_copy_print_page.php', 'proforma_copy_sale_loader', send_data1)
      
      }

          function print_normal_refund(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('print_normal_refund.php', 'print_normal_refund_loader', send_data1)
      
      }


        function print_training_refund(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('print_training_refund.php', 'print_training_refund_loader', send_data1)
      
      }


      
// FOR REAL NORMAL REFUND PRINT

        function normal_refund_print(order_id){
        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('normal_refund_print.php', 'print_refunds', send_data1)
      
      }

      function viewbranch_expense(branch_no){
        var branch_no=Ben_way_to_get_element(branch_no).innerHTML;
        
        
        var send_data1=
                "&branch_no="+branch_no;
      
      
        ajax_changetab_and_send_data('branch_expenses.php', 'branch_expense_loader', send_data1)
      
      }



      function viewcompany_expense(branch_no){
        var branch_no=Ben_way_to_get_element(branch_no).innerHTML;
        
        
        var send_data1=
                "&branch_no="+branch_no;
      
      
        ajax_changetab_and_send_data('branch_expenses.php', 'company_expense_loader', send_data1)
      
      }





          function view_accepted_invoce(invoice_no){
        var invoice_no=Ben_way_to_get_element(invoice_no).innerHTML;
        
        
        var send_data1=
                "&invoice_no="+invoice_no;
      
      
        ajax_changetab_and_send_data('confirm_invoice.php', 'branch_invoice_loader', send_data1)
      
      }

                    function confirm_invoice()
                        {

                    Ben_way_to_get_element('request_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Confirming that you have received Fuel …</div>";
                
                    var order_id=Ben_way_to_get_element('order_id').value;
                    var branch_manager=Ben_way_to_get_element('branch_manager').value;
                    var fuel_in=Ben_way_to_get_element('fuel_in').value;
                

                     var send_data1=
                            "&order_id="+order_id+
                            "&branch_manager="+branch_manager+
                            "&fuel_in="+fuel_in;

                            
                    ajax_changetab_and_send_data('branch_confirm_invoice.php', 'request_message', send_data1)
                }



                function view_branch_accepted_invoce(invoice_no){
        var invoice_no=Ben_way_to_get_element(invoice_no).innerHTML;
        
        
        var send_data1=
                "&invoice_no="+invoice_no;
      
      
        ajax_changetab_and_send_data('check_branch_invoice.php', 'company_branch_invoice_loader', send_data1)
      
      }




      function create_invoice()
                        {

                    Ben_way_to_get_element('create_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Confirming that you have received Fuel …</div>";
                
                    var invoice_go=Ben_way_to_get_element('invoice_go').value;
                    var company_name=Ben_way_to_get_element('company_name').value;
                    var request_branch=Ben_way_to_get_element('request_branch').value;
                    var price_name=Ben_way_to_get_element('price_name').value;
                    var purpose=Ben_way_to_get_element('purpose').value;
                    var description=Ben_way_to_get_element('description').value;
                    var quantity=Ben_way_to_get_element('quantity').value;
                    var fuel_price=Ben_way_to_get_element('fuel_price').value;
                

                     var send_data1=
                            "&invoice_go="+invoice_go+
                            "&company_name="+company_name+
                            "&request_branch="+request_branch+
                            "&price_name="+price_name+
                            "&purpose="+purpose+
                            "&description="+description+
                            "&quantity="+quantity+
                            "&fuel_price="+fuel_price;

                            
                    ajax_changetab_and_send_data('add_invoice.php', 'create_message', send_data1)
                }



        function add_company_discount(discount_no){
        var discount_no=Ben_way_to_get_element(discount_no).innerHTML;

        var send_data1=
                "&discount_no="+discount_no;
      
        ajax_changetab_and_send_data('new_company_discount.php', 'company_discount_loader', send_data1)
      
      }


        function update_branch_details(branch_no){
        var branch_no=Ben_way_to_get_element(branch_no).innerHTML;

        var send_data1=
                "&branch_no="+branch_no;
      
        ajax_changetab_and_send_data('update_branch.php', 'branch_update_loader', send_data1)
      
      }


      function view_company_discount(discount_no){
        var discount_no=Ben_way_to_get_element(discount_no).innerHTML;

        var send_data1=
                "&discount_no="+discount_no;
      
        ajax_changetab_and_send_data('company_consumed_list.php', 'company_discount_list_loader', send_data1)
      
      }


      function view_company_discount_details(discount_no){
        var discount_no=Ben_way_to_get_element(discount_no).innerHTML;

        var send_data1=
                "&discount_no="+discount_no;
      
        ajax_changetab_and_send_data('discount_consumed.php', 'company_discount_list_loader', send_data1)
      
      }






            function print_consumed_data(discount_no){
        var discount_no=Ben_way_to_get_element(discount_no).innerHTML;

        var send_data1=
                "&discount_no="+discount_no;
      
        ajax_changetab_and_send_data('print_consumed_data.php', 'company_discount_details_loader', send_data1)
      
      }



               function view_analysis(order_id){

        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('company_analysis_view.php', 'company_analysis_loader', send_data1)
      
      }   


            function rra_view_analysis(order_id){

        var order_id=Ben_way_to_get_element(order_id).innerHTML;
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('analysed_invoice_details.php', 'rra_analysis_loader', send_data1)
      
      }



            function invoice_rate_view(order_id){
        var invoice_no=Ben_way_to_get_element(invoice_no).innerHTML;
        
        
        var send_data1=
                "&order_id="+order_id;
      
      
        ajax_changetab_and_send_data('invoice_expense_rate_view.php', 'invoice_rate_view_loader', send_data1)
      
      } 



      function view_approved_invoice(invoice_no){
        var invoice_no=Ben_way_to_get_element(invoice_no).innerHTML;
        
        
        var send_data1=
                "&invoice_no="+invoice_no;
      
      
        ajax_changetab_and_send_data('approved_invoice_view.php', 'approved_invoice_view_loader', send_data1)
      
      }



      

// Ben scripts



function register_user(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering the user …</div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  var names=ge('names').value;
  var username=ge('username').value;
  var profile=ge('profile').files[0];
  var email=ge('email').value;
  var user_type=ge('user_type').value;
  var phone_no=ge('phone_no').value;
  var national_id=ge('national_id').value;

  formdata.append('names',names);
  formdata.append('username',username);
  formdata.append('profile',profile);
  formdata.append('email',email);
  formdata.append('user_type',user_type);
  formdata.append('phone_no',phone_no);
  formdata.append('national_id',national_id);
          
  ajax1.open('POST', '../pages/user/register_user.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('status-action').innerHTML=ajax1.responseText;
          
  }; 
          
}


function create_password(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating password …</div>";

	var username=ge('username').value;
	var password=ge('password').value;
	var confpassword=ge('confpassword').value;
	var send_data1=
       "&username="+username+
        "&password="+password+
       "&confpassword="+confpassword;

    ajax_changetab_and_send_data5('pages/user/create_password.php', 'status-action', send_data1);
      
}


// Requesting districts on company

function get_districts(){

	var province=ge('company_province').value;
	var send_data1=
       "&province="+province;

    ajax_changetab_and_send_data6('../pages/company/request_districts.php', 'company_district', send_data1);
}

function get_sectors(){

	var district=ge('company_district').value;
	var send_data1=
       "&district="+district;

    ajax_changetab_and_send_data6('../pages/company/request_sectors.php', 'company_sector', send_data1);
}

function get_cells(){

	var sector=ge('company_sector').value;
	var send_data1=
       "&sector="+sector;

    ajax_changetab_and_send_data6('../pages/company/request_cells.php', 'company_cell', send_data1);
}


// Requesting districts on main stream

function get_districts1(){

	var province=ge('ms_province').value;
	var send_data1=
       "&province="+province;

    ajax_changetab_and_send_data6('../pages/company_manager_user/ms_manager_user/request_districts.php', 'ms_district', send_data1);
}

function get_sectors1(){

	var district=ge('ms_district').value;
	var send_data1=
       "&district="+district;

    ajax_changetab_and_send_data6('../pages/company_manager_user/ms_manager_user/request_sectors.php', 'ms_sector', send_data1);
}

function get_cells1(){

	var sector=ge('ms_sector').value;
	var send_data1=
       "&sector="+sector;

    ajax_changetab_and_send_data6('../pages/company_manager_user/ms_manager_user/request_cells.php', 'ms_cell', send_data1);
}


// Requesting districts on station

function get_districts2(){

	var province=ge('station_province').value;
	var send_data1=
       "&province="+province;

    ajax_changetab_and_send_data6('../pages/company_manager_user/station_manager_user/request_districts.php', 'station_district', send_data1);
}

function get_sectors2(){

	var district=ge('station_district').value;
	var send_data1=
       "&district="+district;

    ajax_changetab_and_send_data6('../pages/company_manager_user/station_manager_user/request_sectors.php', 'station_sector', send_data1);
}

function get_cells2(){

	var sector=ge('station_sector').value;
	var send_data1=
       "&sector="+sector;

    ajax_changetab_and_send_data6('../pages/company_manager_user/station_manager_user/request_cells.php', 'station_cell', send_data1);
}


function register_company(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering the company …</div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  var company_name=ge('company_name').value;
  var company_tin=ge('company_tin').value;
  var profile=ge('profile').files[0];
  var company_phone_no=ge('company_phone_no').value;
  var company_email=ge('company_email').value;
  var company_province=ge('company_province').value;
  var company_district=ge('company_district').value;
  var company_sector=ge('company_sector').value;
  var company_cell=ge('company_cell').value;
  var manager=ge('manager').value;

  formdata.append('company_name',company_name);
  formdata.append('company_tin',company_tin);
  formdata.append('profile',profile);
  formdata.append('company_phone_no',company_phone_no);
  formdata.append('company_email',company_email);
  formdata.append('company_province',company_province);
  formdata.append('company_district',company_district);
  formdata.append('company_sector',company_sector);
  formdata.append('company_cell',company_cell);
  formdata.append('manager',manager);
          
  ajax1.open('POST', '../pages/company/register_company.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('status-action').innerHTML=ajax1.responseText;
          
  }; 
          
}

function register_device(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering device …</div>";

	var device_id=ge('device_id').value;
	var send_data1=
       "&device_id="+device_id;

    ajax_changetab_and_send_data5('../pages/device/register_device.php', 'status-action', send_data1);
      
}


function register_port(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering port …</div>";

	var port_name=ge('port_name').value;
	var port_phone_no=ge('port_phone_no').value;
	var port_email=ge('port_email').value;
	var port_location=ge('port_location').value;
	var manager=ge('manager').value;
	var send_data1=
       "&port_name="+port_name+
        "&port_phone_no="+port_phone_no+
        "&port_email="+port_email+
        "&port_location="+port_location+
        "&manager="+manager;

    ajax_changetab_and_send_data5('../pages/port/register_port.php', 'status-action', send_data1);
      
}

function register_outlet(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering the outlet …</div>";

	var outlet_name=ge('outlet_name').value;
	var port_no=ge('port_no').value;
	var fuel_type=ge('fuel_type').value;
	var send_data1=
       "&outlet_name="+outlet_name+
        "&port_no="+port_no+
        "&fuel_type="+fuel_type;

    ajax_changetab_and_send_data5('../pages/eap_manager_user/outlet/register_outlet.php', 'status-action', send_data1);
      
}


function register_eap_dispenser_user(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering the user …</div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  var names=ge('names').value;
  var username=ge('username').value;
  var profile=ge('profile').files[0];
  var email=ge('email').value;
  var port_no=ge('port_no').value;
  var phone_no=ge('phone_no').value;
  var national_id=ge('national_id').value;

  formdata.append('names',names);
  formdata.append('username',username);
  formdata.append('profile',profile);
  formdata.append('email',email);
  formdata.append('port_no',port_no);
  formdata.append('phone_no',phone_no);
  formdata.append('national_id',national_id);
          
  ajax1.open('POST', '../pages/eap_manager_user/dispenser_user/register_eap_dispenser_user.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('status-action').innerHTML=ajax1.responseText;
          
  }; 
          
}


function register_company_ms_manager_user(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering main stream manager …</div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  var names=ge('names').value;
  var username=ge('username').value;
  var profile=ge('profile').files[0];
  var email=ge('email').value;
  var company_no=ge('company_no').value;
  var phone_no=ge('phone_no').value;
  var national_id=ge('national_id').value;

  formdata.append('names',names);
  formdata.append('username',username);
  formdata.append('profile',profile);
  formdata.append('email',email);
  formdata.append('company_no',company_no);
  formdata.append('phone_no',phone_no);
  formdata.append('national_id',national_id);
          
  ajax1.open('POST', '../pages/company_manager_user/ms_manager_user/register_company_ms_manager_user.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('status-action').innerHTML=ajax1.responseText;
          
  }; 
          
}


function register_main_stream(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering main stream …</div>";

	var ms_name=ge('ms_name').value;
	var ms_phone_no=ge('ms_phone_no').value;
	var ms_email=ge('ms_email').value;
	var manager=ge('manager').value;
	var company_no=ge('company_no').value;
	var ms_province=ge('ms_province').value;
	var ms_district=ge('ms_district').value;
	var ms_sector=ge('ms_sector').value;
	var ms_cell=ge('ms_cell').value;
	var send_data1=
       "&ms_name="+ms_name+
        "&ms_phone_no="+ms_phone_no+
        "&ms_email="+ms_email+
        "&manager="+manager+
        "&company_no="+company_no+
        "&ms_province="+ms_province+
        "&ms_district="+ms_district+
        "&ms_sector="+ms_sector+
        "&ms_cell="+ms_cell;

    ajax_changetab_and_send_data5('../pages/company_manager_user/main_stream/register_main_stream.php', 'status-action', send_data1);
      
}


function register_company_station_manager_user(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering station manager …</div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  var names=ge('names').value;
  var username=ge('username').value;
  var profile=ge('profile').files[0];
  var email=ge('email').value;
  var company_no=ge('company_no').value;
  var phone_no=ge('phone_no').value;
  var national_id=ge('national_id').value;

  formdata.append('names',names);
  formdata.append('username',username);
  formdata.append('profile',profile);
  formdata.append('email',email);
  formdata.append('company_no',company_no);
  formdata.append('phone_no',phone_no);
  formdata.append('national_id',national_id);
          
  ajax1.open('POST', '../pages/company_manager_user/station_manager_user/register_company_station_manager_user.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('status-action').innerHTML=ajax1.responseText;
          
  }; 
          
}


function register_station(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering station …</div>";

	var station_name=ge('station_name').value;
	var station_phone_no=ge('station_phone_no').value;
	var station_email=ge('station_email').value;
	var manager=ge('manager').value;
	var company_no=ge('company_no').value;
	var station_province=ge('station_province').value;
	var station_district=ge('station_district').value;
	var station_sector=ge('station_sector').value;
	var station_cell=ge('station_cell').value;
	var send_data1=
       "&station_name="+station_name+
        "&station_phone_no="+station_phone_no+
        "&station_email="+station_email+
        "&manager="+manager+
        "&company_no="+company_no+
        "&station_province="+station_province+
        "&station_district="+station_district+
        "&station_sector="+station_sector+
        "&station_cell="+station_cell;

    ajax_changetab_and_send_data5('../pages/company_manager_user/station/register_station.php', 'status-action', send_data1);
      
}


function register_discount(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering discount …</div>";

	var company_no=ge('company_no').value;
	var discount_description=ge('discount_description').value;
	var amount_per_liter=ge('amount_per_liter').value;
	var fuel_type=ge('fuel_type').value;
	var send_data1=
        "&company_no="+company_no+
        "&discount_description="+discount_description+
        "&amount_per_liter="+amount_per_liter+
        "&fuel_type="+fuel_type;

    ajax_changetab_and_send_data5('../pages/company_manager_user/discount/register_discount.php', 'status-action', send_data1);
      
}



    if (history.pushState) { //IE10+
        var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + decodeURIComponent(window.location.search);
        window.history.pushState({path:newurl},'',newurl);
    }



function register_main_stream_client(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering main stream client …</div>";

	var ms_no=ge('ms_no').value;
	var company_no=ge('company_no').value;
	var send_data1=
        "&ms_no="+ms_no+
        "&company_no="+company_no;

    ajax_changetab_and_send_data5('../pages/company_ms_manager_user/main_stream_client/register_main_stream_client.php', 'status-action', send_data1);
      
}


function register_ms_tank(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering tank …</div>";

	var tank_name=ge('tank_name').value;
	var ms_no=ge('ms_no').value;
	var fuel_type=ge('fuel_type').value;
	var max_capacity=ge('max_capacity').value;
	var send_data1=
        "&tank_name="+tank_name+
        "&ms_no="+ms_no+
        "&fuel_type="+fuel_type+
		"&max_capacity="+max_capacity;

    ajax_changetab_and_send_data5('../pages/company_ms_manager_user/ms_tank/register_ms_tank.php', 'status-action', send_data1);
      
}

function register_ms_pipe(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering pipe …</div>";

	var tank_no=ge('tank_no').value;
	var pipe_name=ge('pipe_name').value;
	var pipe_type=ge('pipe_type').value;
	var send_data1=
        "&tank_no="+tank_no+
        "&pipe_name="+pipe_name+
        "&pipe_type="+pipe_type;

    ajax_changetab_and_send_data5('../pages/company_ms_manager_user/ms_pipe/register_ms_pipe.php', 'status-action', send_data1);
      
}


function register_company_ms_dispenser_user(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering the user …</div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  var names=ge('names').value;
  var username=ge('username').value;
  var profile=ge('profile').files[0];
  var email=ge('email').value;
  var ms_no=ge('ms_no').value;
  var phone_no=ge('phone_no').value;
  var national_id=ge('national_id').value;

  formdata.append('names',names);
  formdata.append('username',username);
  formdata.append('profile',profile);
  formdata.append('email',email);
  formdata.append('ms_no',ms_no);
  formdata.append('phone_no',phone_no);
  formdata.append('national_id',national_id);
          
  ajax1.open('POST', '../pages/company_ms_manager_user/company_ms_dispenser_user/register_company_ms_dispenser_user.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('status-action').innerHTML=ajax1.responseText;
          
  }; 
          
}

function register_station_tank(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering tank …</div>";

	var tank_name=ge('tank_name').value;
	var station_no=ge('station_no').value;
	var fuel_type=ge('fuel_type').value;
	var max_capacity=ge('max_capacity').value;
	var send_data1=
        "&tank_name="+tank_name+
        "&station_no="+station_no+
        "&fuel_type="+fuel_type+
		"&max_capacity="+max_capacity;

    ajax_changetab_and_send_data5('../pages/company_station_manager_user/station_tank/register_station_tank.php', 'status-action', send_data1);
      
}

function register_station_pipe(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering pipe …</div>";

	var tank_no=ge('tank_no').value;
	var pipe_name=ge('pipe_name').value;
	var pipe_type=ge('pipe_type').value;
	var send_data1=
        "&tank_no="+tank_no+
        "&pipe_name="+pipe_name+
        "&pipe_type="+pipe_type;

    ajax_changetab_and_send_data5('../pages/company_station_manager_user/station_pipe/register_station_pipe.php', 'status-action', send_data1);
      
}

function register_company_station_dispenser_user(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering the user …</div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  var names=ge('names').value;
  var username=ge('username').value;
  var profile=ge('profile').files[0];
  var email=ge('email').value;
  var station_no=ge('station_no').value;
  var phone_no=ge('phone_no').value;
  var national_id=ge('national_id').value;

  formdata.append('names',names);
  formdata.append('username',username);
  formdata.append('profile',profile);
  formdata.append('email',email);
  formdata.append('station_no',station_no);
  formdata.append('phone_no',phone_no);
  formdata.append('national_id',national_id);
          
  ajax1.open('POST', '../pages/company_station_manager_user/company_station_dispenser_user/register_company_station_dispenser_user.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('status-action').innerHTML=ajax1.responseText;
          
  }; 
          
}

$(document).ready(function() {
        	
   			$('#bootstrap-data-table-export').DataTable();
        	
        //Device assignment
        
 			$('#holder2').hide();
        	$('#holder2').attr("disabled", "disabled");
			$('#holder3').hide();
        	$('#holder3').attr("disabled", "disabled");
			$('#holder4').hide();
			$('#holder4').attr("disabled", "disabled");        
        	$('#holder5').hide();
        	$('#holder5').attr("disabled", "disabled");
        	$('#holder6').hide();
        	$('#holder6').attr("disabled", "disabled");
        	$('#holder7').hide();
        	$('#holder7').attr("disabled", "disabled");
        	$('#holder8').hide();
        	$('#holder8').attr("disabled", "disabled");
        	$('#holder9').hide();
        	$('#holder9').attr("disabled", "disabled");
        	$('#holder10').hide();
        	$('#holder10').attr("disabled", "disabled");
        	$('#holder11').hide();
        	$('#holder11').attr("disabled", "disabled");
        	$('#holder12').hide();
        	$('#holder12').attr("disabled", "disabled");
        	$('#holder13').hide();
        	$('#holder13').attr("disabled", "disabled");
			$('#holder14').hide();
        	$('#holder14').attr("disabled", "disabled");
        	//$('#payment-button-amount').css("color", "red");
        	//$('#payment-button').prop("disabled", true);
        	$('#payment-butt').attr("disabled", "disabled");
        
        //User shifts
        
        	$('#end_shift').hide();
        	$('#end_shift').attr("disabled", "disabled");
        	$('#hhlink1').hide();
        	$('#hhlink1').attr("disabled", "disabled");
        	$('#hhlink2').hide();
        	$('#hhlink2').attr("disabled", "disabled");
        	var shift_status_1=ge('shift_status_1').value;
        	
        	if(shift_status_1 === 'ON'){
            $('#start_shift').hide();
        	$('#start_shift').attr("disabled", "disabled");
			$('#end_shift').show();
        	$('#end_shift').attr("disabled", false);
        	$('#hhlink1').show();
        	$('#hhlink1').attr("disabled", false);
        	$('#hhlink2').show();
        	$('#hhlink2').attr("disabled", false);
            $('#hhlink3').show();
        	$('#hhlink3').attr("disabled", false);
            $('#hhlink4').show();
        	$('#hhlink4').attr("disabled", false);
            }else{
            $('#end_shift').hide();
        	$('#end_shift').attr("disabled", "disabled");
        	$('#hhlink1').hide();
        	$('#hhlink1').attr("disabled", "disabled");
        	$('#hhlink2').hide();
        	$('#hhlink2').attr("disabled", "disabled");
            $('#hhlink3').hide();
        	$('#hhlink3').attr("disabled", "disabled");
            $('#hhlink4').hide();
        	$('#hhlink4').attr("disabled", "disabled");
            }
        
        //Fuel transportation
        	
        	$('#new_d_title').hide();
        	$('#driver_name').hide();
        	$('#driver_name').attr("disabled", "disabled");
        	$('#plate_no').hide();
        	$('#plate_no').attr("disabled", "disabled");
        	$('#driver_phone_no').hide();
        	$('#driver_phone_no').attr("disabled", "disabled");
        	$('#driver_licence').hide();
        	$('#driver_licence').attr("disabled", "disabled");
        	     	
});

function call_eap_data(){

var place=ge('place_select').value;
if(place === 'eap'){

 $('#holder4').hide();
 $('#holder4').attr("disabled", "disabled");
 $('#holder2').show();
 $('#holder2').attr("disabled", false);
 $('#holder3').show();
 $('#holder3').attr("disabled", false);
 $('#holder14').show();
 $('#holder14').attr("disabled", false);

        	$('#holder5').hide();
			$('#holder5').attr("disabled", "disabled");
        	$('#holder6').hide();
			$('#holder6').attr("disabled", "disabled");
        	$('#holder7').hide();
			$('#holder7').attr("disabled", "disabled");
        	$('#holder8').hide();
			$('#holder8').attr("disabled", "disabled");
        	$('#holder9').hide();
			$('#holder9').attr("disabled", "disabled");
        	$('#holder10').hide();
			$('#holder10').attr("disabled", "disabled");
        	$('#holder11').hide();
			$('#holder11').attr("disabled", "disabled");
        	$('#holder12').hide();
			$('#holder12').attr("disabled", "disabled");
        	$('#holder13').hide();
			$('#holder13').attr("disabled", "disabled");

 $('#payment-butt').attr("disabled", false);
 $('#pipe_holder').attr("value", "eap_outlet");
      
}else if(place === 'company'){

 $('#holder2').hide();
 $('#holder2').attr("disabled", "disabled");
 $('#holder3').hide();
 $('#holder3').attr("disabled", "disabled");
 $('#holder4').show();
 $('#holder4').attr("disabled", false);
 $('#holder5').show();
 $('#holder5').attr("disabled", false);

        	$('#holder6').hide();
			$('#holder6').attr("disabled", "disabled");
        	$('#holder7').hide();
			$('#holder7').attr("disabled", "disabled");
        	$('#holder8').hide();
			$('#holder8').attr("disabled", "disabled");
        	$('#holder9').hide();
			$('#holder9').attr("disabled", "disabled");
        	$('#holder10').hide();
			$('#holder10').attr("disabled", "disabled");
        	$('#holder11').hide();
			$('#holder11').attr("disabled", "disabled");
        	$('#holder12').hide();
			$('#holder12').attr("disabled", "disabled");
        	$('#holder13').hide();
			$('#holder13').attr("disabled", "disabled");
			$('#holder14').hide();
			$('#holder14').attr("disabled", "disabled");

 $('#payment-butt').attr("disabled", false);
 $('#pipe_holder').attr("value", "tank_pipe");

}else{}

}

function call_company_data(){

var place=ge('place_select2').value;
if(place === 'main_stream'){

 
        	$('#holder6').show();
			$('#holder6').attr("disabled", false);
        	$('#holder7').show();
			$('#holder7').attr("disabled", false);
        	$('#holder8').show();
			$('#holder8').attr("disabled", false);
        	$('#holder9').show();
			$('#holder9').attr("disabled", false);
        	$('#holder10').hide();
			$('#holder10').attr("disabled", "disabled");
        	$('#holder11').hide();
			$('#holder11').attr("disabled", "disabled");
        	$('#holder12').hide();
			$('#holder12').attr("disabled", "disabled");
        	$('#holder13').hide();
			$('#holder13').attr("disabled", "disabled");
 			$('#holder14').show();
			$('#holder14').attr("disabled", false);

 $('#payment-butt').attr("disabled", false);
 $('#pipe_holder').attr("value", "tank_pipe");
      
}else if(place === 'station'){

        	$('#holder6').hide();
			$('#holder6').attr("disabled", "disabled");
        	$('#holder7').hide();
			$('#holder7').attr("disabled", "disabled");
        	$('#holder8').hide();
			$('#holder8').attr("disabled", "disabled");
        	$('#holder9').hide();
			$('#holder9').attr("disabled", "disabled");
        	$('#holder10').show();
			$('#holder10').attr("disabled", false);
        	$('#holder11').show();
			$('#holder11').attr("disabled", false);
        	$('#holder12').show();
			$('#holder12').attr("disabled", false);
        	$('#holder13').show();
			$('#holder13').attr("disabled", false);
	 		$('#holder14').show();
			$('#holder14').attr("disabled", false);
 $('#payment-butt').attr("disabled", false);
 $('#pipe_holder').attr("value", "tank_pipe");

}else{}

}

//eap assignment

function get_eap_outlets(){

	var port_no=ge('port_select').value;
	var send_data1=
       "&port_no="+port_no;

    ajax_changetab_and_send_data6('../pages/device/get_eap_outlets.php', 'pipe_no', send_data1);
}

//main_stream assignment

function get_company_ms(){

	var company_no=ge('company_select').value;
	var send_data1=
       "&company_no="+company_no;

    ajax_changetab_and_send_data6('../pages/device/get_company_ms.php', 'main_stream_select', send_data1);
}

function get_ms_tank(){

	var ms_no=ge('main_stream_select').value;
	var send_data1=
       "&ms_no="+ms_no;

    ajax_changetab_and_send_data6('../pages/device/get_ms_tank.php', 'tank_select', send_data1);
}

function call_pipe_data(){

	var tank_no=ge('tank_select').value;
	var pipe_type=ge('type_select').value;
	var send_data1=
       "&tank_no="+tank_no+
		"&pipe_type="+pipe_type;

    ajax_changetab_and_send_data6('../pages/device/call_pipe_data.php', 'pipe_no2', send_data1);
}

//station_stream assignment

function get_company_station(){

	var company_no=ge('company_select').value;
	var send_data1=
       "&company_no="+company_no;

    ajax_changetab_and_send_data6('../pages/device/get_company_station.php', 'station_select', send_data1);
}

function get_station_tank(){

	var station_no=ge('station_select').value;
	var send_data1=
       "&station_no="+station_no;

    ajax_changetab_and_send_data6('../pages/device/get_station_tank.php', 'tank_select2', send_data1);
}

function call_pipe_data2(){

	var tank_no=ge('tank_select2').value;
	var pipe_type=ge('type_select2').value;
	var send_data1=
       "&tank_no="+tank_no+
		"&pipe_type="+pipe_type;

    ajax_changetab_and_send_data6('../pages/device/call_pipe_data.php', 'pipe_no3', send_data1);
}

//all assignment

function device_assignment(){

var place_value=ge('place_select').value;

if(place_value === 'eap'){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Assigning device …</div>";

	var device_no=ge('device_no').value;
	var pipe_holder=ge('pipe_holder').value;
	var pipe_no=ge('pipe_no').value;
	var send_data1=
        "&device_no="+device_no+
        "&pipe_holder="+pipe_holder+
        "&pipe_no="+pipe_no;

    ajax_changetab_and_send_data5('../pages/device/device_assignment.php', 'status-action', send_data1);

}

if(place_value === 'company'){

var place_value2=ge('place_select2').value;

if(place_value2 === 'main_stream'){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Assigning device …</div>";

	var device_no=ge('device_no').value;
	var pipe_holder=ge('pipe_holder').value;
	var pipe_no=ge('pipe_no2').value;
	var send_data1=
        "&device_no="+device_no+
        "&pipe_holder="+pipe_holder+
        "&pipe_no="+pipe_no;

    ajax_changetab_and_send_data5('../pages/device/device_assignment_specified.php', 'status-action', send_data1);

}

if(place_value2 === 'station'){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Assigning device …</div>";

	var device_no=ge('device_no').value;
	var pipe_holder=ge('pipe_holder').value;
	var pipe_no=ge('pipe_no3').value;
	var send_data1=
        "&device_no="+device_no+
        "&pipe_holder="+pipe_holder+
        "&pipe_no="+pipe_no;

    ajax_changetab_and_send_data5('../pages/device/device_assignment_specified.php', 'status-action', send_data1);

}

}
      
}


function generating_receipt(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Saving data and generating receipt …</div>";

	var tin_number=ge('tin_number').value;
	var station_no=ge('station_no').value;
	var dispenser_user=ge('user_no').value;
	var fuel_type=ge('fuel_type').value;
	var total_amount=ge('total_amount').value;
	var quantity=ge('quantity').value;
	var send_data1=
        "&tin_number="+tin_number+
        "&station_no="+station_no+
        "&dispenser_user="+dispenser_user+
		"&fuel_type="+fuel_type+
		"&total_amount="+total_amount+
		"&quantity="+quantity;

    ajax_changetab_and_send_data5('../pages/company_station_dispenser_user/receipt/generating_receipt.php', 'status-action', send_data1);
      
}


function start_shift(userno){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Starting shift …</div>";

	var user_no=userno;
	var send_data1=
		"&user_no="+user_no;

    ajax_changetab_and_send_data5('../pages/eap_dispenser_user/shift/start_shift.php', 'status-action', send_data1);

        //User shifts
        
        	$('#start_shift').hide();
        	$('#start_shift').attr("disabled", "disabled");
			$('#end_shift').show();
        	$('#end_shift').attr("disabled", false);
        	$('#hhlink1').show();
        	$('#hhlink1').attr("disabled", false);
        	$('#hhlink2').show();
        	$('#hhlink2').attr("disabled", false);
			$('#hhlink3').show();
        	$('#hhlink3').attr("disabled", false);
			$('#hhlink4').show();
        	$('#hhlink4').attr("disabled", false);
      
}

function end_shift(userno){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Ending shift …</div>";

	var user_no=userno;
	var send_data1=
		"&user_no="+user_no;

    ajax_changetab_and_send_data5('../pages/eap_dispenser_user/shift/end_shift.php', 'status-action', send_data1);

        //User shifts
        
        	$('#start_shift').show();
        	$('#start_shift').attr("disabled", false);
			$('#end_shift').hide();
        	$('#end_shift').attr("disabled", "disabled");
        	$('#hhlink1').hide();
        	$('#hhlink1').attr("disabled", "disabled");
        	$('#hhlink2').hide();
        	$('#hhlink2').attr("disabled", "disabled");
			$('#hhlink3').hide();
        	$('#hhlink3').attr("disabled", "disabled");
			$('#hhlink4').hide();
        	$('#hhlink4').attr("disabled", "disabled");
      
}

function find_volume(){

  ge('t_volume').value="Calculating volume...";
	//first
	var station_no=ge('station_no').value;
	var t_amount=ge('t_amount').value;
	var discount_no=ge('discount_no').value;
	var send_data1=
		"&station_no="+station_no+
        "&t_amount="+t_amount+
        "&discount_no="+discount_no;

    ajax_changetab_and_send_data7('../pages/company_station_dispenser_user/discount_receipt/find_volume.php', 't_volume', send_data1);
	//second
	var station_no=ge('station_no').value;
	var t_amount=ge('t_amount').value;
	var discount_no=ge('discount_no').value;
	var send_data1=
		"&station_no="+station_no+
        "&t_amount="+t_amount+
        "&discount_no="+discount_no;

    ajax_changetab_and_send_data7('../pages/company_station_dispenser_user/discount_receipt/find_volume.php', 't_volume', send_data1);
	//third
	var station_no=ge('station_no').value;
	var t_amount=ge('t_amount').value;
	var discount_no=ge('discount_no').value;
	var send_data1=
		"&station_no="+station_no+
        "&t_amount="+t_amount+
        "&discount_no="+discount_no;

    ajax_changetab_and_send_data7('../pages/company_station_dispenser_user/discount_receipt/find_volume.php', 't_volume', send_data1);

    setTimeout(function () {

    var t_amount=ge('t_amount').value;
	var t_volume=ge('t_volume').value;
	var amount_per_liter=ge('amount_per_liter').value;
    
    var t_am = (amount_per_liter * t_volume).toFixed(0);
	ge('total_amount').value =  (t_amount - t_am).toFixed(0);
    
    }, 2000);

      
}

function find_volume2(){

  ge('quantity').value="Calculating volume...";
	//first
	var station_no=ge('station_no').value;
	var fuel_type=ge('fuel_type').value;
	var total_amount=ge('total_amount').value;
	var send_data1=
		"&station_no="+station_no+
        "&fuel_type="+fuel_type+
        "&total_amount="+total_amount;

    ajax_changetab_and_send_data7('../pages/company_station_dispenser_user/receipt/find_volume.php', 'quantity', send_data1);
	//second
	var station_no=ge('station_no').value;
	var fuel_type=ge('fuel_type').value;
	var total_amount=ge('total_amount').value;
	var send_data1=
		"&station_no="+station_no+
        "&fuel_type="+fuel_type+
        "&total_amount="+total_amount;
	
    ajax_changetab_and_send_data7('../pages/company_station_dispenser_user/receipt/find_volume.php', 'quantity', send_data1);
	//third
	var station_no=ge('station_no').value;
	var fuel_type=ge('fuel_type').value;
	var total_amount=ge('total_amount').value;
	var send_data1=
		"&station_no="+station_no+
        "&fuel_type="+fuel_type+
        "&total_amount="+total_amount;

    ajax_changetab_and_send_data7('../pages/company_station_dispenser_user/receipt/find_volume.php', 'quantity', send_data1);
      
}

function find_am_p_l(){

	var station_no=ge('station_no').value;
	var fuel_type=ge('fuel_type').value;
	var send_data1=
		"&station_no="+station_no+
        "&fuel_type="+fuel_type;

    ajax_changetab_and_send_data7('../pages/company_station_dispenser_user/receipt/find_am_p_l.php', 'am_p_l', send_data1);
      
}

function find_volume3(){

    var total_amount=ge('total_amount').value;
	var amount_per_liter=ge('am_p_l').value;
    
    var volume = (total_amount / amount_per_liter).toFixed(2);
	ge('quantity').value =  volume;

      
}

function find_volume4(){

    var t_amount=ge('t_amount').value;
	var am_p_l=ge('am_p_l').value;
    
    var volume = (t_amount / am_p_l).toFixed(2);
	ge('t_volume').value =  volume;


    var t_amount=ge('t_amount').value;
	var t_volume=ge('t_volume').value;
	var am_p_l=ge('am_p_l').value;
	var amount_per_liter=ge('amount_per_liter').value;
    
    var t_am = (amount_per_liter * t_volume).toFixed(0);
	ge('total_amount').value =  (t_amount - t_am).toFixed(0);

      
}

function get_discount(){

  ge('amount_per_liter').value="Calculating discount...";

	var discount_no=ge('discount_no').value;
	var send_data1=
        "&discount_no="+discount_no;

    ajax_changetab_and_send_data7('../pages/company_station_dispenser_user/discount_receipt/get_discount.php', 'amount_per_liter', send_data1);
      
}

function find_the_fuel(){

	var discount_no=ge('discount_no').value;
	var send_data1=
        "&discount_no="+discount_no;

    ajax_changetab_and_send_data7('../pages/company_station_dispenser_user/discount_receipt/find_the_fuel.php', 'fuel_type', send_data1);
      
}


function generating_discount_receipt(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Saving data and generating receipt …</div>";

	var discount_no=ge('discount_no').value;
	var station_no=ge('station_no').value;
	var dispenser_user=ge('user_no').value;
	var plate_no=ge('plate_no1').value;
	var total_amount=ge('total_amount').value;
	var total_volume=ge('t_volume').value;
	var send_data1=
        "&discount_no="+discount_no+
        "&station_no="+station_no+
        "&dispenser_user="+dispenser_user+
		"&plate_no="+plate_no+
		"&total_amount="+total_amount+
		"&total_volume="+total_volume;

    ajax_changetab_and_send_data5('../pages/company_station_dispenser_user/discount_receipt/generating_discount_receipt.php', 'status-action', send_data1);
      
}


function show_outlet_volume(){

	var pipe_no=ge('pipe_no').value;
	var p_volume=ge('p_volume').value;
	var out_info=ge('outlets_info').value;

	if(out_info === ""){
    
	var outlets_info=ge('outlets_info').value;

    setTimeout(function () {

	ge('outlets_info').value =  outlets_info + pipe_no + '-' + p_volume;
    
    }, 300);
    
    }else{	

	ge('outlets_info').value= ge('outlets_info').value + "|";
	var outlets_info=ge('outlets_info').value;

    setTimeout(function () {

	ge('outlets_info').value =  outlets_info + pipe_no + '-' + p_volume;
    
    }, 300);
    
    }

      
}

function clear_outlet(){

	ge('outlets_info').value = "";

}


function check_driver(){

	var driver_no=ge('driver_no').value;

	if(driver_no === "new_driver"){
    
    		$('#new_d_title').show();
        	$('#driver_name').show();
        	$('#driver_name').attr("disabled", false);
        	$('#plate_no').show();
        	$('#plate_no').attr("disabled", false);
        	$('#driver_phone_no').show();
        	$('#driver_phone_no').attr("disabled", false);
        	$('#driver_licence').show();
        	$('#driver_licence').attr("disabled", false);
    
    }else{	

    		$('#new_d_title').hide();
        	$('#driver_name').hide();
        	$('#driver_name').attr("disabled", "disabled");
        	$('#plate_no').hide();
        	$('#plate_no').attr("disabled", "disabled");
        	$('#driver_phone_no').hide();
        	$('#driver_phone_no').attr("disabled", "disabled");
        	$('#driver_licence').hide();
        	$('#driver_licence').attr("disabled", "disabled");
    
    }

      
}


function register_new_fuel_transp(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Confirming onload data …</div>";

	var trans_type=ge('trans_type').value;
	var destination_country=ge('destination_country').value;
	var company_no=ge('company_no').value;
	var volume=ge('volume').value;
	var fuel_type=ge('fuel_type').value;
	var temperature=ge('temperature').value;
	var amount_per_liter=ge('amount_per_liter').value;
	var fuel_from=ge('fuel_from').value;
	var fuel_from_no=ge('fuel_from_no').value;
	var user_no=ge('user_no').value;
	var driver_no=ge('driver_no').value;
	var outlets_info=ge('outlets_info').value;
	var driver_name=ge('driver_name').value;
	var plate_no=ge('plate_no').value;
	var driver_phone_no=ge('driver_phone_no').value;
	var driver_licence=ge('driver_licence').value;
	var send_data1=
        "&trans_type="+trans_type+
        "&destination_country="+destination_country+
        "&company_no="+company_no+
        "&volume="+volume+
		"&fuel_type="+fuel_type+
		"&temperature="+temperature+
		"&amount_per_liter="+amount_per_liter+
        "&fuel_from="+fuel_from+
        "&fuel_from_no="+fuel_from_no+
        "&user_no="+user_no+
        "&driver_no="+driver_no+
		"&outlets_info="+outlets_info+
		"&driver_name="+driver_name+
		"&plate_no="+plate_no+
		"&driver_phone_no="+driver_phone_no+
		"&driver_licence="+driver_licence;

    ajax_changetab_and_send_data5('../pages/eap_dispenser_user/fuel_transportation/register_new_fuel_transp.php', 'status-action', send_data1);
      
}


function find_amount_p_l(){

  ge('amount_per_liter').value="Calculating amount...";

	var fuel_type=ge('fuel_type').value;
	var ms_no=ge('fuel_from_no').value;
	var send_data1=
        "&fuel_type="+fuel_type+
		"&ms_no="+ms_no;

    ajax_changetab_and_send_data7('../pages/company_ms_dispenser_user/fuel_transportation/find_amount_p_l.php', 'amount_per_liter', send_data1);
      
}

function select_pipes(){

	var trans_type=ge('trans_type').value;
	var ms_no=ge('fuel_from_no').value;
	var send_data1=
        "&trans_type="+trans_type+
        "&ms_no="+ms_no;

    ajax_changetab_and_send_data6('../pages/company_ms_dispenser_user/fuel_transportation/select_pipes.php', 'pipe_no', send_data1);
}


function register_new_fuel_transp_ms(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Confirming onload data …</div>";

	var trans_type=ge('trans_type').value;
	var company_no=ge('company_no').value;
	var volume=ge('volume').value;
	var fuel_type=ge('fuel_type').value;
	var temperature=ge('temperature').value;
	var amount_per_liter=ge('amount_per_liter').value;
	var fuel_from=ge('fuel_from').value;
	var fuel_from_no=ge('fuel_from_no').value;
	var user_no=ge('user_no').value;
	var driver_no=ge('driver_no').value;
	var outlets_info=ge('outlets_info').value;
	var driver_name=ge('driver_name').value;
	var plate_no=ge('plate_no').value;
	var driver_phone_no=ge('driver_phone_no').value;
	var driver_licence=ge('driver_licence').value;
	var send_data1=
        "&trans_type="+trans_type+
        "&company_no="+company_no+
        "&volume="+volume+
		"&fuel_type="+fuel_type+
		"&temperature="+temperature+
		"&amount_per_liter="+amount_per_liter+
        "&fuel_from="+fuel_from+
        "&fuel_from_no="+fuel_from_no+
        "&user_no="+user_no+
        "&driver_no="+driver_no+
		"&outlets_info="+outlets_info+
		"&driver_name="+driver_name+
		"&plate_no="+plate_no+
		"&driver_phone_no="+driver_phone_no+
		"&driver_licence="+driver_licence;

    ajax_changetab_and_send_data5('../pages/company_ms_dispenser_user/fuel_transportation/register_new_fuel_transp.php', 'status-action', send_data1);
      
}

function find_fuel_from(){

	var fuel_from=ge('fuel_from').value;
	var send_data1=
        "&fuel_from="+fuel_from;

    ajax_changetab_and_send_data6('../pages/company_station_manager_user/fuel_transportation/fuel_from.php', 'fuel_from_no', send_data1);
}

function select_pipes2(){

	var trans_type=ge('trans_type').value;
	var station_no=ge('station_destination').value;
	var send_data1=
        "&trans_type="+trans_type+
        "&station_no="+station_no;

    ajax_changetab_and_send_data6('../pages/company_station_manager_user/fuel_transportation/select_pipes.php', 'pipe_no', send_data1);
}


function register_new_fuel_transp_station(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Confirming offload data …</div>";

	var trans_type=ge('trans_type').value;
	var destination=ge('destination').value;
	var station_destination=ge('station_destination').value;
	var company_no=ge('company_no').value;
	var volume=ge('volume').value;
	var fuel_type=ge('fuel_type').value;
	var temperature=ge('temperature').value;
	var amount_per_liter=ge('amount_per_liter').value;
	var fuel_from=ge('fuel_from').value;
	var fuel_from_no=ge('fuel_from_no').value;
	var user_no=ge('user_no').value;
	var driver_no=ge('driver_no').value;
	var outlets_info=ge('outlets_info').value;
	var send_data1=
        "&trans_type="+trans_type+
        "&destination="+destination+
        "&station_destination="+station_destination+
        "&company_no="+company_no+
        "&volume="+volume+
		"&fuel_type="+fuel_type+
		"&temperature="+temperature+
		"&amount_per_liter="+amount_per_liter+
        "&fuel_from="+fuel_from+
        "&fuel_from_no="+fuel_from_no+
        "&user_no="+user_no+
        "&driver_no="+driver_no+
		"&outlets_info="+outlets_info;

    ajax_changetab_and_send_data5('../pages/company_station_manager_user/fuel_transportation/register_new_fuel_transp.php', 'status-action', send_data1);
      
}


function register_new_fuel_type(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering new fuel type …</div>";

	var fuel_name=ge('fuel_name').value;
	var send_data1=
		"&fuel_name="+fuel_name;

    ajax_changetab_and_send_data5('../pages/rura_user/fuel/register_new_fuel_type.php', 'status-action', send_data1);
      
}

function register_new_pricing(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering new fuel pricing …</div>";

	var fuel_type=ge('fuel_type').value;
	var amount_per_liter=ge('amount_per_liter').value;
	var region=ge('region').value;
	var send_data1=
		"&fuel_type="+fuel_type+
        "&amount_per_liter="+amount_per_liter+
        "&region="+region;

    ajax_changetab_and_send_data5('../pages/rura_user/fuel/register_new_pricing.php', 'status-action', send_data1);
      
}

function register_discount_limit(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering the discount limit …</div>";

	var fuel_type=ge('fuel_type').value;
	var discount_limit=ge('discount_limit').value;
	var send_data1=
		"&fuel_type="+fuel_type+
        "&discount_limit="+discount_limit;

    ajax_changetab_and_send_data5('../pages/rura_user/fuel/register_discount_limit.php', 'status-action', send_data1);
      
}

function new_station_fuel_type(){

  ge('status-action').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Registering new station fuel type …</div>";

	var fuel_type=ge('fuel_type').value;
	var station_no=ge('station_no').value;
	var send_data1=
		"&fuel_type="+fuel_type+
        "&station_no="+station_no;

    ajax_changetab_and_send_data5('../pages/company_station_manager_user/fuel/new_station_fuel_type.php', 'status-action', send_data1);
      
}


function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}


