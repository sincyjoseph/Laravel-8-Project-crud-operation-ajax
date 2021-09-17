<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
        crossorigin="anonymous">
    <title>Laravel CRUD</title>
<style>
    h3{
    text-align: center;
    color:brown;
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 50px;
    }
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {
        background-color: #dddddd;
    }
    .error {
        color: red;
        margin-left: 5px;
    }
</style>
</head>

<body>
<br/>
<div class="container">
<div class="row">
    <div class="col-3">&nbsp;</div>
    <div class="col-6">
        <form id="reg" name="myForm" method="POST" >
            @csrf
            <br>
            <input type="hidden" name="HI" id="HI"/>
            <h3>Registration form</h3>
            <br/>
        <div class="form-group col-12">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label class="control-label">Username</label>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control" type="text" name="username" id="username"/>
                    @foreach($errors->get('username') as $err)
                        <small class="text-danger">{{ $err }}</small>
                    @endforeach
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label class="control-label">Password</label>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control" type="password" name="password" id="password"/>
                    @foreach($errors->get('password') as $err)
                        <small class="text-danger">{{ $err }}</small>
                    @endforeach
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label class="control-label">Email</label>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control" type="email" name="email" id="email"/>
                    @foreach($errors->get('email') as $err)
                        <small class="text-danger">{{ $err }}</small>
                    @endforeach
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label class="control-label">Phone number</label>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control" type="tel" name="phone" id="phone"/>
                    @foreach($errors->get('phone') as $err)
                        <small class="text-danger">{{ $err }}</small>
                    @endforeach
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label class="control-label">Date of Birth</label>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control" type="date" name="dateofbirth" id="dateofbirth"/>
                    @foreach($errors->get('dateofbirth') as $err)
                        <small class="text-danger">{{ $err }}</small>
                    @endforeach
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label class="control-label">Gender</label>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <label class="form-check-label">Male</label>
                    <input type="radio" class="form-check-input" name="gender"  id="male" value="male"/>
                    <label class="form-check-label">Female</label>
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female"/>
                    @foreach($errors->get('gender') as $err)
                        <small class="text-danger">{{ $err }}</small>
                    @endforeach
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label class="control-label">Address</label>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                    @foreach($errors->get('address') as $err)
                        <small class="text-danger">{{ $err }}</small>
                    @endforeach
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label class="control-label">Declaration</label>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 declaration">
                    <input type="checkbox" class="form-check-input" name="declaration" id="declaration" value="checked"/>
                    @foreach($errors->get('declaration') as $err)
                        <small class="text-danger">{{ $err }}</small>
                    @endforeach
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-8">&nbsp;</div>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <button type="reset" class="btn btn-danger reset">Reset</button>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <button type="submit" class="btn btn-primary" data-action='save' name="save" id="save_button">Save</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="col-3">&nbsp;</div>
</div>
</div>
<hr>
<div class="container">
<table class="table table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody id="table_data">

    </tbody>
</table>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"
        integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg=="
        crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function(){
    getdata();
});

//get data by ajax
function getdata(){
    $.ajax({
        url: "{{route('getUser')}}",
        type: "GET",
        dataType: "json",
        success: function (response) {
            console.log(response);
            $.each(response.userdata, function (key, value) { 
                var created_at = moment(value['created_at']).format("YYYY/MM/DD");
                var updated_at = moment(value['updated_at']).format("YYYY/MM/DD");
                console.log(created_at);
                $('#table_data').append(
                    '<tr>'+
                    '<td>'+value['id']+'</td>'+
                    '<td>'+value['username']+'</td>'+
                    '<td>'+value['password']+'</td>'+
                    '<td>'+value['email']+'</td>'+
                    '<td>'+value['phone']+'</td>'+
                    '<td>'+value['dateofbirth']+'</td>'+
                    '<td>'+value['gender']+'</td>'+
                    '<td>'+value['address']+'</td>'+
                    '<td>'+created_at+'</td>'+
                    '<td>'+updated_at+'</td>'+
                    '<td>'+
                        '<span class="btn btn-sm btn-info edit" data-id="'+value['id']+'">E</span>'+
                        '<span class="btn btn-sm btn-danger delete" data-id="'+value['id']+'">D</span>'+
                    '</td>'+
                    '</tr>'
                );
            });
            onEdit();
            onDelete();
        },
        error: function(jqXHR, exception){
            console.log(jqXHR);
        }

    });
}

//resetting the feilds
$(".reset").click(function() {
    $('#HI').val(0);
    $('#username').val('');
    $('#password').val('');
    $('#email').val('');
    $('#phone').val('');
    var genderinfo = document.forms['myForm']['gender'];
    if(genderinfo[0].checked==true || genderinfo[1].checked==true){
        $('#female').prop( "checked", false );
        $('#male').prop( "checked", false );
    }
    $('#dateofbirth').val('');
    $('#address').val('');
    $("#save_button").html('Save').data('action', 'save');
});

//edit operation
function onEdit() {
    $('.edit').off('click');
    $(".edit").on('click', function (e) {
        var row = $(this).closest('tr');
        var userId = $(this).data("id");
        $("#save_button").html('Update').data('action', 'update');
        $(row).each(function () {
                var username = $(this).find("td:eq(1)").text().trim();
                var password = $(this).find("td:eq(2)").text().trim();
                var email = $(this).find("td:eq(3)").text().trim();
                var phone = $(this).find("td:eq(4)").text().trim();
                var dateofbirth = $(this).find("td:eq(5)").text().trim();
                var gender = $(this).find("td:eq(6)").text();
                if(gender == 'female'){
                    $('#female').prop( "checked", true );
                }else if(gender == 'male'){
                    $('#male').prop( "checked", true );
                }
                var address = $(this).find("td:eq(7)").text().trim();

                $('#username').val(username);
                $('#password').val(password);
                $('#email').val(email);
                $('#phone').val(phone);
                $('#dateofbirth').val(dateofbirth);
                $('#address').val(address);
                $('#HI').val(userId);
        });
    });
}
onEdit();

//delete operation
function onDelete() {
    $('.delete').off('click');
    $('.delete').on( 'click', function(){
        alert(123);
        var obj = $(this);
        var userId = $(this).data('id');
        var operation = 'delete';
        var token = $('input[name="_token"]').val();
        var confirmalert = confirm("Are you sure?");
        if (confirmalert == true) {
        $.ajax({
            url: '{{route("deleteUser")}}',
            type: 'POST',
            data: { 
                userId: userId,
                operation: operation
            },
            headers: {'X-CSRF-TOKEN': token},
            dataType: "json",
            success: function(response){
                if (response.code==200){
                    $(obj).closest('tr').remove();
                }
            }
        });
        }
    });
}
onDelete();


$("#reg").submit(function(e) {
    e.preventDefault();
    var username = $('#username').val();
    var password = $('#password').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var dateofbirth = $('#dateofbirth').val();
    var gender = $('input[name="gender"]:checked').val();
    var address = $('#address').val();
    var declaration = $('input[name="declaration"]:checked').val();
    var token = $('input[name="_token"]').val();
    var operation = $("#save_button").data('action');
    var data = {
        username: username,
        password: password,
        email: email,
        phone: phone,
        dateofbirth: dateofbirth,
        gender: gender,
        address: address,
        declaration: declaration,
        operation: operation,
    };
    var genderinfo = document.forms['myForm']['gender'];
    if(operation=='update'){
        var HI = $('#HI').val();
        data.userId = HI;
    }
    $(".error").remove();
    if (username.length == 0) {
        $('#username').after('<span class="error">This field is required</span>');
        e.preventDefault();
    }else if(password.length == 0){
        $('#password').after('<span class="error">This field is required</span>');
        e.preventDefault();
    }else if(email.length == 0){
        $('#email').after('<span class="error">This field is required</span>');
        e.preventDefault();
    }else if(phone.length == 0){
        $('#phone').after('<span class="error">This field is required</span>');
        e.preventDefault();
    }else if(dateofbirth.length == 0){
        $('#dateofbirth').after('<span class="error">This field is required</span>');
        e.preventDefault();
    }else if(genderinfo[0].checked==false && genderinfo[1].checked==false){
        $('#female').after('<span class="error">This field is required</span>');
        e.preventDefault();
    }else if(address.length == 0){
        $('#address').after('<span class="error">This field is required</span>');
        e.preventDefault();
    }else if(!document.getElementById('declaration').checked){
        $('#declaration').after('<span class="error">This field is required</span>');
        e.preventDefault();
    }else{
        $.ajax({
            url: "{{route('addUser')}}",
            type: "POST",
            data: data,
            headers: {'X-CSRF-TOKEN': token},
            dataType:"json",
            success:function(response){
                //console.log(response.code);
                var rowCount = $("#table_data tr").length;
                if(operation=='save'){
                    var out = '<tr>';
                      out += '<td>'+ response.lastId+'</td>';
                      out += '<td>'+ data.username+'</td>';
                      out += '<td>'+ data.password+'</td>';
                      out += '<td>'+ data.email+'</td>';
                      out += '<td>'+ data.phone+'</td>';
                      out += '<td>'+ data.dateofbirth+'</td>';
                      out += '<td>'+ data.gender+'</td>';
                      out += '<td>'+ data.address+'</td>';
                      out += '<td>'+ new Date().getFullYear()+"-"+new Date().getMonth()+"-"+new Date().getDate()+" "+
                                        new Date().getHours()+":"+new Date().getMinutes()+":"+new Date().getSeconds() + '</td>';
                      out += '<td>'+ new Date().getFullYear()+"-"+new Date().getMonth()+"-"+new Date().getDate()+" "+
                                        new Date().getHours()+":"+new Date().getMinutes()+":"+new Date().getSeconds() + '</td>';
                      out += '<td >';
                      out += '<span class="btn btn-info edit" data-id="'+ response.lastId +'">E</span>';
                      out += '<span class="btn btn-danger delete" data-id="'+ response.lastId +'">D</span>';
                      out += '</td></tr>';
                      
                      if(rowCount > 0) {
                          $(out).insertAfter('#table_data tr:last');
                          $('#reg')[0].reset();
                      } else {
                          $('#table_data').html(out);
                          $('#reg')[0].reset();
                      }
                }else if(operation=='update'){
                    var tableRow = $("td").filter(function() {
                          return $(this).text() == HI;
                      }).closest("tr");    
                      //console.log(tableRow);
                      tableRow.find("td:eq(1)").html(username);
                      tableRow.find("td:eq(2)").html(password);
                      tableRow.find("td:eq(3)").html(email);
                      tableRow.find("td:eq(4)").html(phone);
                      tableRow.find("td:eq(5)").html(dateofbirth);
                      tableRow.find("td:eq(6)").html(gender);
                      tableRow.find("td:eq(7)").html(address);
                      tableRow.find("td:eq(8)").html(new Date().getFullYear()+"-"+new Date().getMonth()+"-"+new Date().getDate()+" "+
                                                     new Date().getHours()+":"+new Date().getMinutes()+":"+new Date().getSeconds());
                      tableRow.find("td:eq(9)").html(new Date().getFullYear()+"-"+new Date().getMonth()+"-"+new Date().getDate()+" "+
                                                     new Date().getHours()+":"+new Date().getMinutes()+":"+new Date().getSeconds());
                      $('#reg')[0].reset();
                      $('#HI').val(0);
                }
                onEdit();
                onDelete();
            }      
        }); 
    }
});

</script>
</body>
</html>