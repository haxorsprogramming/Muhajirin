document.querySelector("#txtUsername").focus();
var fillPassword = document.getElementById("txtPassword");
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
fillPassword.addEventListener("keyup", function (event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("btnLogin").click();
    }
});
function pesanUmumApp(icon, title, text)
{
    Swal.fire({
        icon : icon,
        title : title,
        text : text
    });
}
