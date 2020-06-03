

function simpanForm1(){
	
	let data_diri = ['nok','nama','nik','nisn','npsn_asal','alamat_pengenal','nohp','lp','tmp_lahir','tgl_lahir','anak_ke','jml_saudara','bhs_hari','tinggal_dengan','goda','r_penyakit','t_badan','b_badan','ukr_baju','nama_seijasah','tmp_lahir_seijasah','tgl_lahir_seijasah','nopes','nilai_ijasah','no_ijasah','no_skhu','thn_ijs','nama_sekolah_asal','kls_akhir','data_awal_id'];

	var objek = {};
	for (var i = 0; i < data_diri.length; i++) {
		index = data_diri[i]
		isi = ( $("input[name="+data_diri[i]+"]").val() );
		objek[index] = isi;
	}
		objek ['lp'] = $('#lp :selected').val();
		objek ['bhs_hari'] = $('#bhs_hari :selected').val();
		objek ['goda'] = $('#goda :selected').val();
		objek ['tinggal_dengan'] = $('#tinggal_dengan :selected').val();
		objek ['ukr_baju'] = $('#ukr_baju :selected').val();
		objek ['kls_akhir'] = $('#kls_akhir :selected').val();

	 if (objek ['lp'] == '') {
	 	alert('Kolom jenis kelamin masih kosong..');
	 }else if( objek ['bhs_hari'] == '' ){
	 	alert('Kolom bahasa sehari-hari masih kosong..');
	 }else if( objek ['goda'] == '' ){
	 	alert('Kolom golongan darah masih kosong..');
	 }else if( objek ['ukr_baju'] == '' ){
	 	alert('Kolom ukuran baju masih kosong..');
	 }else if( objek ['tinggal_dengan'] == '' ){
	 	alert('Kolom ukuran baju masih kosong..');
	 }

	
	$.ajax({
		url:'simpanFormulirAjax',
		type:'post',
		data: objek,
		dataType:'json',
		success: function (data){
		}
	})
	 

}

function simpanForm2(){
	
	let data_ortu = ['sts','nama_ortu','nik_ortu','tmp_lahir_ortu','tgl_lahir_ortu','pendidikan_ortu','pekerjaan_ortu','penghasilan_ortu','no_hp_ortu','keterangan_ortu','data_awal_id',];
	
	var objek = {};

	for (var h=1; h<4; h++) {
		for (var i = 0; i < data_ortu.length; i++) {
			index = data_ortu[i]+h;
			isi = ( $("input[name="+data_ortu[i]+h+"]").val() );
			objek[index] = isi;

			objek ['pendidikan_ortu'+h+''] = $('#pendidikan_ortu'+h+' :selected').val();
			objek ['pekerjaan_ortu'+h+''] = $('#pekerjaan_ortu'+h+' :selected').val();
			objek ['penghasilan_ortu'+h+''] = $('#penghasilan_ortu'+h+' :selected').val();
			objek ['keterangan_ortu'+h+''] = $('#keterangan_ortu'+h+' :selected').val();
		}
	}


	$.ajax({
		url:'simpanFormulirAjax3',
		type:'post',
		data: objek,
		dataType:'json',
		success: function (data){
		}
	})
}


$('.nav-link').on('click',function(){
	
	link = $(this).attr('id');

	if (link == 'ortu-tab') {
		simpanForm1();
	}else{
		simpanForm1();
		simpanForm2();
	}
	
});

var ClipboardHelper = {

    copyElement: function ($element)
    {
       this.copyText($element.text())
    },
    copyText:function(text) // Linebreaks with \n
    {
        var $tempInput =  $("<textarea>");
        $("body").append($tempInput);
        $tempInput.val(text).select();
        document.execCommand("copy");
        $tempInput.remove();
    }
};

$(document).ready(function(){
	
	$('#simpanForm').on('click',function(){
		simpanForm1();
		simpanForm2();

		// $.when( simpanForm2() ).done(function() {
		//     // location.reload();
		// });
	});


	$('#nok, #nik_ortu1').simpleMask({
		'mask': '###### ###### ####'//, 
		// 'nextInput': $('#frDtel') 
	});

	tampilPertanyaan();

	$('.copy').on('click',function(){
		x = $(this).data('nilai');
		ClipboardHelper.copyText(x);
	})
});



function tampilPertanyaan(param = 1){
	pilihan_ganda = ''
	base = '<?=base_url()?>';
	$.ajax({
		'url':'tampilPertanyaan',
		'type':'post',
		'dataType': 'json',
		'data':{data:param},
		success:function(data){
			let no = '<span id="id-perty" class="text-success h5">'+param+'. </span>';
			let soal = data[0]['konten_perty'];
			$('#box-pertanyaan').html(no+ soal);

			let pilihan = data[1];

			for (var i = 0; i < pilihan.length; i++) {
				pilihan_ganda += '<div class="custom-control custom-radio">'+
					'<input type="radio" id="jawaban'+pilihan[i].id_pilihan+'" name="customRadioInline" class="custom-control-input">'+
					'<label class="custom-control-label" for=jawaban'+i+'">'+pilihan[i].konten_pilihan+'</label>'+
				'</div>'
			}
			$('#box-jawaban').html(pilihan_ganda);
		}
	})
}

$('#simpan-asesment').on('click', function(){
	let id = parseInt($('#id-perty').text())+1;
	tampilPertanyaan(id);
});





