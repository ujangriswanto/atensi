function login_db()
{
    let txt_username=document.querySelector("#txtusername").value;
    let txt_password=document.querySelector("#txtpassword").value;

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
                    open("admin.html");
                    
                }else if(txt_username == username && txt_password == password && level_user == "user"){
                    open("home.html");
                    
                }else if(txt_username != username || txt_password != password){
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


function simpandata()
{
    let DecisionTree = require('node_modules/decision-tree/lib/decision-tree');
    let training_data = [
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "keluarga"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "Tongkat",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "keluarga"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "Tongkat",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "keluarga"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "Tongkat",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "keluarga"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "keluarga"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "Tongkat",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "keluarga"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "keluarga"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "keluarga"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "keluarga"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "Kacamata Low Vision",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "keluarga"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "keluarga"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "komunitas"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Kecelakaan",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "komunitas"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "komunitas"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "residensial"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "Kacamata Low Vision",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "residensial"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "residensial"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "residensial"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "Kacamata Low Vision",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "residensial"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "residensial"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "residensial"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "keluarga"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "Kacamata Low Vision",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "keluarga"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "Tongkat",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "komunitas"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "Kacamata Low Vision",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "komunitas"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "Kacamata Low Vision",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "komunitas"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "Tongkat",
          "peyebab disabilitas": "Kecelakaan",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "komunitas"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "Tongkat",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "komunitas"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "Kacamata Low Vision",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "komunitas"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Kecelakaan",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "komunitas"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "Tongkat",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "residensial"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "Tongkat",
          "peyebab disabilitas": "Kecelakaan",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "residensial"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "Tongkat",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "residensial"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "komunitas"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "Tongkat",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "komunitas"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "Kacamata Low Vision",
          "peyebab disabilitas": "Sejak lahir",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "komunitas"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "tidak ada",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "komunitas"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "Tongkat",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "residensial"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "Kacamata Low Vision",
          "peyebab disabilitas": "Kecelakaan",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "residensial"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "Kacamata Low Vision",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "tidak",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "residensial"
        },
        {
          "Jenis Kelamin": "L",
          "Jenis Disabilitas": "Low Vision",
          "alat bantu": "Kacamata Low Vision",
          "peyebab disabilitas": "Kecelakaan",
          "penyakit yang diderita saat ini": "tidak ada",
          "obat yg sedang dikonsumsi": "ada",
          "apa pernah dirawat?": "tidak",
          "apa masih perlu pengobatan?": "tidak",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "ya",
          "Output/pelayanan": "residensial"
        },
        {
          "Jenis Kelamin": "P",
          "Jenis Disabilitas": "Totality Blind",
          "alat bantu": "Tongkat",
          "peyebab disabilitas": "Penyakit",
          "penyakit yang diderita saat ini": "ada",
          "obat yg sedang dikonsumsi": "tidak ada",
          "apa pernah dirawat?": "ya",
          "apa masih perlu pengobatan?": "ya",
          "ada bukti gangguan kesehatan depresi dll?": "ya",
          "apa pernah trauma?": "tidak",
          "Output/pelayanan": "residensial"
        }
      ];

      var nama_kelas = "Output/pelayanan";
      var atribut = ["Jenis Kelamin",
      "Jenis Disabilitas",
      "alat bantu",
      "peyebab disabilitas", 
      "penyakit yang diderita saat ini",      
      "obat yg sedang dikonsumsi",      
      "apa pernah dirawat?",      
      "apa masih perlu pengobatan?",      
      "ada bukti gangguan kesehatan depresi dll?",
      "apa pernah trauma?"];



    var nama_lengkap = $('#nama_lengkap').val()
    var nama_panggilan = $('#nama_panggilan').val()
    var NIK = $('#NIK').val()
    var no_kk = $('#no_kk').val()
    var jenis_kelamin = $('#jenis_kelamin').val()
    var usia = $('#usia').val()
    var tempat_lahir = $('#tempat_lahir').val()
    var tanggal_lahir = $('#tanggal_lahir').val()
    var alamat = $('#alamat').val()
    var islam = $('#agama').val()
    var anak_ke = $('#anak_ke').val()
    var jumlah_saudara = $('#jumlah_saudara').val()
    var status_pernikahan = $('#status_pernikahan').val()
    var pekerjaan = $('#pekerjaan').val()
    var jaminan_sosial = $('#jaminan_sosial').val()
    var no_kartu = $('#no_kartu').val()
    var no_hp = $('#no_hp').val()
    var pendidikan_terakhir = $('#pendidikan_terakhir').val()
    var program_rehabilitasi = $('#program_rehabilitasi').val()
    var penyelenggara = $('#penyelenggara').val()
    var nama_ayah = $('#nama_ayah').val()
    var alamat_ayah = $('#alamat_ayah').val()
    var pekerjaan_ayah = $('#pekerjaan_ayah').val()
    var penghasilan_ayah = $('#penghasilan_ayah').val()
    var no_hp_ayah = $('#no_hp_ayah').val()
    var st_hidup_ayah = $('#st_hidup_ayah').val()
    var agama_ayah = $('#agama_ayah').val()
    var nama_ibu = $('#nama_ibu').val()
    var alamat_ibu = $('#alamat_ibu').val()
    var pekerjaan_ibu = $('#pekerjaan_ibu').val()
    var penghasilan_ibu = $('#penghasilan_ibu').val()
    var no_hp_ibu = $('#no_hp_ibu').val()
    var st_hidup_ibu = $('#st_hidup_ibu').val()
    var agama_ibu = $('#agama_ibu').val()
    var nama_wali = $('#nama_wali').val()
    var alamat_wali = $('#alamat_wali').val()
    var pekerjaan_wali = $('#pekerjaan_wali').val()
    var penghasilan_wali = $('#penghasilan_wali').val()
    var no_hp_wali = $('#no_hp_wali').val()
    var agama_wali = $('#agama_wali').val()
    var hubungan_dengan_pm = $('#hubungan_dengan_pm').val()
    var nama_keluarga = $('#nama_keluarga').val()
    var alamat_keluarga = $('#alamat_keluarga').val()
    var pekerjaan_keluarga = $('#pekerjaan_keluarga').val()
    var penghasilan_keluarga = $('#penghasilan_keluarga').val()
    var no_hp_keluarga = $('#no_hp_keluarga').val()
    var st_hidup_keluarga = $('#st_hidup_keluarga').val()
    var agama_keluarga = $('#agama_keluarga').val()
    var jumlah_tanggungan = $('#jumlah_tanggungan').val()
    var jenis_disabilitas = $('#jenis_disabilitas').val()
    var alat_bantu = $('#alat_bantu').val()
    var kemampuan_dasar = $('#kemampuan_dasar').val()
    var kapan_alami_disabilitas = $('#kapan_alami_disabilitas').val()
    var penyakit_diderita = $('#penyakit_diderita').val()
    var penyakit_pernah_diderita = $('#penyakit_pernah_diderita').val()
    var langkah_pengobatan = $('#langkah_pengobatan').val()
    var obat_yang_dikonsumsi = $('#obat_yang_dikonsumsi').val()
    var jumlah_obat = $('#jumlah_obat').val()
    var pernah_dirawat = $('#pernah_dirawat').val()
    var lama_dirawat = $('#lama_dirawat').val()
    var kecanduan_narkotika = $('#kecanduan_narkotika').val()
    var keadaan_disabilitas = $('#keadaan_disabilitas').val()
    var riwayat_kesehatan = $('#riwayat_kesehatan').val()
    var bukti_gangguan = $('#bukti_gangguan').val()
    var pernah_trauma = $('#pernah_trauma').val()
    var penyelamatan = $('#penyelamatan').val()
    var medis = $('#medis').val()
    var psikososial = $('#psikososial').val()
    var kebutuhan_diinginkan = $('#kebutuhan_diinginkan').val()
    var diri_sendiri = $('#diri_sendiri').val()
    var keluarga = $('#keluarga').val()
    var masyarakat = $('#masyarakat').val()
    var kelembagaan = $('#kelembagaan').val()
    var analisis_peksos = $('#analisis_peksos').val()

    $.ajax({
        url: 'inputdb.php',
        type: 'POST',
        data: {
            'nama_lengkap': nama_lengkap,
            'nama_panggilan': nama_panggilan,
            'NIK':NIK,
            'no_kk':no_kk,
            'jenis_kelamin':jenis_kelamin,
            'usia':usia,
            'tempat_lahir':tempat_lahir,
            'tanggal_lahir':tanggal_lahir,
            'alamat':alamat,
            'agama':islam,
            'anak_ke':anak_ke,
            'jumlah_saudara':jumlah_saudara,
            'status_pernikahan':status_pernikahan,
            'pekerjaan':pekerjaan,
            'jaminan_sosial':jaminan_sosial,
            'no_kartu':no_kartu,
            'no_hp':no_hp,
            'pendidikan_terakhir':pendidikan_terakhir,
            'program_rehabilitasi':program_rehabilitasi,
            'penyelenggara':penyelenggara,
            'nama_ayah':nama_ayah,
            'alamat_ayah':alamat_ayah,
            'pekerjaan_ayah':pekerjaan_ayah,
            'penghasilan_ayah':penghasilan_ayah,
            'no_hp_ayah':no_hp_ayah,
            'st_hidup_ayah':st_hidup_ayah,
            'agama_ayah':agama_ayah,
            'nama_ibu':nama_ibu,
            'alamat_ibu':alamat_ibu,
            'pekerjaan_ibu':pekerjaan_ibu,
            'penghasilan_ibu':penghasilan_ibu,
            'no_hp_ibu':no_hp_ibu,
            'st_hidup_ibu':st_hidup_ibu,
            'agama_ibu':agama_ibu,
            'nama_wali':nama_wali,
            'alamat_wali':alamat_wali,
            'pekerjaan_wali':pekerjaan_wali,
            'penghasilan_wali':penghasilan_wali,
            'no_hp_wali':no_hp_wali,
            'agama_wali':agama_wali,
            'hubungan_dengan_pm':hubungan_dengan_pm,
            'nama_keluarga':nama_keluarga,
            'alamat_keluarga':alamat_keluarga,
            'pekerjaan_keluarga':pekerjaan_keluarga,
            'penghasilan_keluarga':penghasilan_keluarga,
            'no_hp_keluarga':no_hp_keluarga,
            'st_hidup_keluarga':st_hidup_keluarga,
            'agama_keluarga':agama_keluarga,
            'jumlah_tanggungan':jumlah_tanggungan,
            'jenis_disabilitas':jenis_disabilitas,
            'alat_bantu':alat_bantu,
            'kemampuan_dasar':kemampuan_dasar,
            'kapan_alami_disabilitas':kapan_alami_disabilitas,
            'penyakit_diderita':penyakit_diderita,
            'penyakit_pernah_diderita':penyakit_pernah_diderita,
            'langkah_pengobatan':langkah_pengobatan,
            'obat_yang_dikonsumsi':obat_yang_dikonsumsi,
            'jumlah_obat':jumlah_obat,
            'pernah_dirawat':pernah_dirawat,
            'lama_dirawat':lama_dirawat,
            'kecanduan_narkotika':kecanduan_narkotika,
            'keadaan_disabilitas':keadaan_disabilitas,
            'riwayat_kesehatan':riwayat_kesehatan,
            'bukti_gangguan':bukti_gangguan,
            'pernah_trauma':pernah_trauma,
            'penyelamatan':penyelamatan,
            'medis':medis,
            'psikososial':psikososial,
            'kebutuhan_diinginkan':kebutuhan_diinginkan,
            'diri_sendiri':diri_sendiri,
            'keluarga':keluarga,
            'masyarakat':masyarakat,
            'kelembagaan':kelembagaan,
            'analisis_peksos':analisis_peksos
        },
        datatype: 'JSON',
        success: function(data)
        {
            alert('Berhasil Simpan Data!')
        }
    })
}