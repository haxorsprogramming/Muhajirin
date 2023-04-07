document.querySelector("#txtUsername").focus();
function loginAtc()
{
    let endpointAuth = server+"admin/auth/login/process";
    let endpointDashboard = server+"admin/dashboard";
    let username = document.querySelector("#txtUsername").value;
    let password = document.querySelector("#txtPassword").value;

    if(username.length === 0 || password.length === 0){
        pesanUmumApp("warning","Gagal", "Isi semua field !!!");
    }else{
        let ds = {'username':username, 'password':password}
        axios.post(endpointAuth, ds).then(function (res){
            if(res.data.success === true){
                window.location.assign(endpointDashboard);
            }else{
                pesanUmumApp("error", "Gagal", "Username / password salah !!!");
            }
        });
    }
}
function pesanUmumApp(icon, title, text)
{
    Swal.fire({
        icon : icon,
        title : title,
        text : text
    });
}
