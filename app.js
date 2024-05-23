// Memilih tombol hamburger dari DOM
const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');

// Memilih menu navigasi mobile dari DOM
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');

// Memilih semua item menu dari DOM
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');

// Memilih elemen header dari DOM
const header = document.querySelector('.header.container');

// Menambahkan event listener pada tombol hamburger
hamburger.addEventListener('click', () => {
	// Mengubah status kelas 'active' pada tombol hamburger
	hamburger.classList.toggle('active');
	// Mengubah status kelas 'active' pada menu navigasi mobile
	mobile_menu.classList.toggle('active');
});

// Menambahkan event listener pada event scroll
document.addEventListener('scroll', () => {
	// Mendapatkan posisi scroll vertikal
	var scroll_position = window.scrollY;
	// Jika posisi scroll melebihi 250 piksel dari atas halaman
	if (scroll_position > 250) {
		// Mengubah warna latar belakang header menjadi putih
		header.style.backgroundColor = 'white';
	} else {
		// Jika tidak, mengatur latar belakang header menjadi transparan
		header.style.backgroundColor = 'transparent';
	}
});

// Menambahkan event listener pada setiap item menu
menu_item.forEach((item) => {
	// Ketika salah satu item menu di-klik
	item.addEventListener('click', () => {
		// Mengubah status kelas 'active' pada tombol hamburger
		hamburger.classList.toggle('active');
		// Mengubah status kelas 'active' pada menu navigasi mobile
		mobile_menu.classList.toggle('active');
	});
});
