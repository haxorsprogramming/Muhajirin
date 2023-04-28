var mainApp = new Vue({
    el : '#mainApp',
    data : {
        judulPage : 'Dashboard'
    },
    methods : {

    }
});

function renderPage(page, judulPage)
{
    let divUtama = $("#divUtama");
    divUtama.html("Memuat ...");
    divUtama.load(server + page);
    mainApp.judulPage = judulPage;
}

var rBeranda = "admin/dashboard/beranda";

renderPage(rBeranda, 'Dashboard');
