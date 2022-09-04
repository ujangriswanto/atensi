function login_db()
{
    let txt_username=document.querySelector("#username").value;
    let txt_password=document.querySelector("#password").value;

    $.ajax({
        type:"GET",
        data:"",
        url:"ambildata.php",
        success : function(result){
            var objResult=JSON.parse(result);
            $.each(objResult, function(key,val){
                username=val.username;
                password=val.password;
                level_user=val.level;
                let id_user_1=val.id_user;
                if(txt_username==""){
                    swal({
                        title:'Kosong!',
                        text: 'Harap isi Username',
                        icon: 'warning'
                    })
                }else if(txt_password==""){
                    swal({
                        title:'Kosong!',
                        text: 'Harap isi Password',
                        icon: 'warning'
                    })
                }else if(txt_username == username && txt_password == password && level_user == "admin"){
                    window.location.href("admin.html");
                    
                }else if(txt_username == username && txt_password == password && level_user == "user"){
                    window.location.href("home.html");
                    
                }else{
                    swal(
                        {
                            title:"Kesalahan",
                            text: "Username atau password salah",
                            icon: "warning"
                        }
                    )
                }
            })
        }
    })
}
