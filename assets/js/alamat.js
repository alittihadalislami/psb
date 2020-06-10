function listPropinsi() {
	let propinsi = '<option selected>Pilih...</option>';
	$.ajax({
		'url':'listPropinsi',
		'type':'post',
		'dataType': 'json',
		success:function(response){
				for (var i = 0; i < response.length; i++) {
					propinsi += '<option value="'+response[i].kode+'">'+response[i].nama+'</option>';
				}
			$('#inputPropinsi').html(propinsi);
		}
	})
}

listPropinsi();


$(document).ready(function(){

	$('.input-alamat').select2({
	});

	$('#alamat').click(function(){
		$('#alamatModal').modal();
	})

	$('#inputPropinsi').change(function(){
		listKabupaten();
		resetKecamatan();
		resetDesa();
	})

	$('#inputKabupaten').change(function(){
		listKecamatan();
		resetDesa();
	})

	$('#inputKecamatan').change(function(){
		listDesa();
	})

	$('#simpan-alamat').on('click', function(){
		simpanAlamat();
	});

	$('#close-alamat').on('click', function(){
		$('#alamat').val('');
	});

});

function listKabupaten(){
	
	let propinsi = $('#inputPropinsi').find(':selected')[0].value;
	let kabupaten = '<option selected>Pilih...</option>';

	 $.ajax({
		'url':'listKabupaten',
		'type':'post',
		'dataType': 'json',
		'data':{id:propinsi},
		success:function(response){
				for (var i = 0; i < response.length; i++) {
					kabupaten += '<option value="'+response[i].kode+'">'+response[i].nama+'</option>';
				}
			$('#inputKabupaten').html(kabupaten);
		}
	})
}

function listKecamatan(){
	
	let kabupaten = $('#inputKabupaten').find(':selected')[0].value;
	let kecamatan = '<option selected>Pilih...</option>';

	 $.ajax({
		'url':'listKecamatan',
		'type':'post',
		'dataType': 'json',
		'data':{id:kabupaten},
		success:function(response){
				for (var i = 0; i < response.length; i++) {
					kecamatan += '<option value="'+response[i].kode+'">'+response[i].nama+'</option>';
				}
			$('#inputKecamatan').html(kecamatan);
		}
	})
}

function listDesa(){
	
	let kecamatan = $('#inputKecamatan').find(':selected')[0].value;
	let desa = '<option selected>Pilih...</option>';

	 $.ajax({
		'url':'listDesa',
		'type':'post',
		'dataType': 'json',
		'data':{id:kecamatan},
		success:function(response){
				for (var i = 0; i < response.length; i++) {
					desa += '<option value="'+response[i].kode+'">'+response[i].nama+'</option>';
				}
			$('#inputDesa').html(desa);
		}
	})
}

function resetKecamatan(){
	let option = '<option selected>Pilih...</option><option>Pilih kabupaten dulu...</option>';
	$('#inputKecamatan').html(option);
}

function resetDesa(){
	let option = '<option selected>Pilih...</option><option>Pilih kecamatan dulu...</option>';
	$('#inputDesa').html(option);
}

function simpanAlamat(){
	let desa = $('#inputDesa').find(':selected')[0].value;
	let alamat_pengenal = $('#alamat-pengenal').val();
	let alamat_tampil = $('#inputDesa').find(':selected')[0].text+', '+$('#inputKecamatan').find(':selected')[0].text+', '+$('#inputKabupaten').find(':selected')[0].text+', '+$('#inputPropinsi').find(':selected')[0].text;
	id = desa.substring(0,5);

	if (id != 'Pilih') {
		if ( alamat_pengenal != '') 
		{
			$('#alamatModal').modal('hide');
			$('#alamat').val(toTitleCase(alamat_pengenal)+'\n'+ toTitleCase(alamat_tampil));
			$('#alamat-simpan').val(alamat_pengenal);
			$('#desa-id').val(desa);
		}else{
			alert ('Alamat pengenal untuk rumah silahkan di isi \n(contoh: RT1-RW2 / Gg. Cempaka no.04 / Sebelah Masjid Jami )');
			$('#alamat-pengenal').focus();
		}

	}else{
		alert ('Silahkan pilih alamat dengan lengkap dan benar ');
	}
}

function toTitleCase(str) {
    return str.replace(
        /\w\S*/g,
        function(txt) {
            return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
        }
    );
}