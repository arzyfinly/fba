<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    SejarahController, VisiMisiTujuanController, DashboardController,
    ProfilPimpinanController, ProfilStaffDosenController,PanduanPendidikanController,
    ProgramStudiController, FasilitasController, AkreditasiController,
    KalenderAkademikController, AgendaController, BeasiswaController, InformasiController,
    PrestasiMahasiswaController,PengumumanController, YudisiumWisudaController,
    PendaftaranController, TentangAlumniController, IkatanAlumniController,
    TracerStudyController, PeluangKerjaController, OrmawaController,
    PaktaIntegritasController, AturanGratifikasiController, DokumenZonaIntegritasController,
    UnibaMaduraExpoController, SOPController,

};
use App\Http\Controllers\{
    ProfilController, HomeController, AkademikController, KemahasiswaanController, BeritaController, InformasiPublikController, AlumniController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::redirect('/', '/home');
Route::get('/home',                                                [HomeController::class, 'index'])->name('home');

// PROFIL
Route::get('/profil/sejarah-fba/',                                 [ProfilController::class, 'sejarah'])->name('guest.sejarah');
Route::get('/profil/visi-misi-tujuan-fba/',                        [ProfilController::class, 'visiMisiTujuanFeb'])->name('guest.visi-misi');
Route::get('/profil/pimpinan-fba/',                                [ProfilController::class, 'pimpinanFeb'])->name('guest.pimpinan');
Route::get('/profil/staff-dosen-fba/',                             [ProfilController::class, 'staffDosenFeb'])->name('guest.staff-dosen-fba');
Route::get('/profil/rencana-strategis-fba/',                       [ProfilController::class, 'rencanaStrategis'])->name('guest.rencana-strategis-fba');
Route::get('/profil/fasilitas-fba/',                               [ProfilController::class, 'fasilitas'])->name('guest.fasilitas-fba');
Route::get('/profil/akreditasi-fba/',                              [ProfilController::class, 'akreditasi'])->name('guest.akreditasi-fba');
// Route::get('/profil/struktur-organisasi-fba/',                  [ProfilController::class, 'strukturOrganisasi'])->name('guest.struktur-organisasi-fba');

// AKADEMIK
Route::get('/akademik/panduan-pendidikan-fba/',                    [AkademikController::class, 'panduanPendidikanFeb'])->name('guest.panduan-pendidikan-fba');
Route::get('/akademik/buku-pedoman-skripsi-fba/',                  [AkademikController::class, 'bukuPedomanSkripsiFeb'])->name('guest.buku-pedoman-skripsi-fba');
Route::get('/akademik/program-studi-fba/manajemen',                [AkademikController::class, 'manajemen'])->name('guest.manajemen-fba');
Route::get('/akademik/program-studi-fba/akuntansi',                [AkademikController::class, 'akuntansi'])->name('guest.akuntansi-fba');
Route::get('/akademik/program-studi-fba/teknik-industri',          [AkademikController::class, 'teknikIndustri'])->name('guest.teknik-industri-fba');
Route::get('/akademik/kalender-akademik-fba/',                     [AkademikController::class, 'kalenderAkademikFeb'])->name('guest.kalender-akademik-fba');
Route::get('/akademik/yudisium-dan-wisuda/',                       [AkademikController::class, 'yudisiumDanWisuda'])->name('guest.yudisium-dan-wisuda-fba');

// KEMAHASISWAAN
Route::get('/kemahasiswaan/info-kemahasiswaan/beasiswa',           [KemahasiswaanController::class, 'beasiswa'])->name('guest.beasiswa-fba');
Route::resource('info-kemahasiswaan-beasiswa',                     KemahasiswaanController::class);
Route::get('/kemahasiswaan/info-kemahasiswaan/prestasi-mahasiswa', [KemahasiswaanController::class, 'prestasiMahasiswa'])->name('guest.prestasi-mahasiswa-fba');
Route::resource('info-kemahasiswaan/prestasi-mahasiswa',           KemahasiswaanController::class);
Route::resource('info-kemahasiswaan/ormawa-fba',                   KemahasiswaanController::class);

// BERITA
Route::get('/berita/informasi-fba',                                [BeritaController::class, 'informasi'])->name('guest.informasi-fba');
Route::resource('berita-informasi-fba',                            BeritaController::class);
Route::resource('berita-pengumuman-fba',                           BeritaController::class);
Route::get('/berita/pengumuman-fba',                               [BeritaController::class, 'pengumuman'])->name('guest.pengumuman-fba');
Route::get('/berita/agenda-fba',                                   [BeritaController::class, 'agenda'])->name('guest.agenda-fba');

// ALUMNI
Route::get('/alumni/tentang-alumni-fba',                           [AlumniController::class, 'tentang'])->name('guest.tentang-alumni-fba');
Route::resource('alumni-tentang-alumni-fba',                       AlumniController::class);
Route::get('/alumni/ikatan-alumni-fba',                            [AlumniController::class, 'ikatan'])->name('guest.ikatan-alumni-fba');
Route::resource('peluang-kerja-fba',                               AlumniController::class);
Route::get('/alumni/peluang-kerja-fba',                            [AlumniController::class, 'peluang'])->name('guest.peluang-kerja-fba');

// INFORMASI PUBLIK
Route::get('/alumni/zona-integritas/pakta-integritas-fba',         [InformasiPublikController::class,  'pakta'])->name('guest.pakta-integritas-fba');
Route::get('/alumni/zona-integritas/aturan-gratifikasi-fba',       [InformasiPublikController::class,  'aturan'])->name('guest.aturan-gratifikasi-fba');
Route::get('/alumni/zona-integritas/dokumen-zona-integritas-fba',  [InformasiPublikController::class,  'dokumen'])->name('guest.dokumen-zona-integritas-fba');
Route::get('/alumni/zona-integritas/uniba-expo-fba',               [InformasiPublikController::class,  'expo'])->name('guest.dokumen-zona-integritas-fba');
Route::get('/alumni/zona-integritas/sop-fba',                      [InformasiPublikController::class,  'sop'])->name('guest.dokumen-zona-integritas-fba');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    // HOME
    Route::get('/dashboard',                                                                [DashboardController::class, 'index'])->name('dashboard');

    // PROFIL
    Route::get('Akreditasi-fba',                                                            [AkreditasiController::class,                  'show'])    ->name('akreditasi-fba.show');
    Route::post('admin/profil/akreditasi-fba/header',                                       [AkreditasiController::class,                  'header'])  ->name('akreditasi-fba.header');
    Route::resource('admin/profil/akreditasi-fba',                                          AkreditasiController::class)        ->except(['show']);

    Route::get('fasilitas-fba',                                                             [FasilitasController::class,                  'show'])    ->name('fasilitas-fba.show');
    Route::post('admin/profil/fasilitas-fba/header',                                        [FasilitasController::class,                  'header'])  ->name('fasilitas-fba.header');
    Route::resource('admin/profil/fasilitas-fba',                                           FasilitasController::class)        ->except(['show']);

    Route::get('sejarah-fba',                                                               [SejarahController::class,                  'show'])    ->name('sejarah-fba.show');
    Route::post('admin/profil/sejarah-fba/header',                                          [SejarahController::class,                  'header'])  ->name('sejarah-fba.header');
    Route::resource('admin/profil/sejarah-fba',                                             SejarahController::class)        ->except(['show']);

    Route::get('visi-misi-tujuan-fba',                                                      [VisiMisiTujuanController::class,           'show'])    ->name('visi-misi-tujuan-fba.show');
    Route::post('admin/profil/visi-misi-tujuan-fba/header',                                 [VisiMisiTujuanController::class,           'header'])  ->name('visi-misi-tujuan-fba.header');
    Route::resource('admin/profil/visi-misi-tujuan-fba',                                    VisiMisiTujuanController::class) ->except(['show']);

    Route::get('pimpinan-fba',                                                              [ProfilPimpinanController::class,           'show'])    ->name('pimpinan-fba.show');
    Route::post('admin/profil/pimpinan-fba/header',                                         [ProfilPimpinanController::class,           'header'])  ->name('pimpinan-fba.header');
    Route::resource('admin/profil/pimpinan-fba',                                            ProfilPimpinanController::class) ->except(['show']);

    Route::get('staff-dosen-fba',                                                           [ProfilStaffDosenController::class,         'show'])    ->name('staff-dosen-fba.show');
    Route::post('admin/profil/staff-dosen-fba/header',                                      [ProfilStaffDosenController::class,         'header'])  ->name('staff-dosen-fba.header');
    Route::resource('admin/profil/staff-dosen-fba',                                         ProfilStaffDosenController::class)->except(['show']);

    // Route::post('admin/profil/identitas-fba/header',                                      [IdentitasFSTController::class,             'header']) ->name('identitas-fba.header');
    // Route::get('identitas-fba',                                                           [IdentitasFSTController::class,             'show'])   ->name('identitas-fba.show');
    // Route::resource('admin/profil/identitas-fba',                                         IdentitasFSTController::class)    ->except(['show']);

    // AKADEMIK
    Route::get('panduan-pendidikan-fba',                                                    [PanduanPendidikanController::class,            'show'])            ->name('panduan-pendidikan-fba.show');
    Route::post('admin/akademik/panduan-pendidikan-fba/header',                             [PanduanPendidikanController::class,            'header'])          ->name('panduan-pendidikan-fba.header');
    Route::resource('admin/akademik/panduan-pendidikan-fba',                                PanduanPendidikanController::class)   ->except(['show']);

    Route::post('admin/akademik/program-studi-fba/header',                                  [ProgramStudiController::class,             'header'])          ->name('program-studi-fba.header');
    Route::resource('admin/akademik/program-studi-fba',                                     ProgramStudiController::class);
    Route::post('admin/akademik/program-studi-fba/{id?}/create',                            [ProgramStudiController::class,             'detailStore']) ->name('program-studi-fba.detail.store');
    Route::post('admin/akademik/program-studi-fba/{id?}/update',                            [ProgramStudiController::class,             'detailUpdate']) ->name('program-studi-fba.detail.update');
    Route::post('admin/akademik/program-studi-fba/{id?}/edit',                              [ProgramStudiController::class,               'detailEdit']) ->name('program-studi-fba.detail.edit');
    Route::delete('admin/akademik/program-studi-fba/{id?}/delete',                          [ProgramStudiController::class,               'detailDestroy']) ->name('program-studi-fba.detail.destroy');

    Route::get('kalender-akademik-fba',                                                     [KalenderAkademikController::class,            'show'])            ->name('kalender-akademik-fba.show');
    Route::post('admin/akademik/kalender-akademik-fba/header',                              [KalenderAkademikController::class,            'header'])          ->name('kalender-akademik-fba.header');
    Route::resource('admin/akademik/kalender-akademik-fba',                                 KalenderAkademikController::class)   ->except(['show']);

    Route::get('yudisium-wisuda-fba',                                                       [YudisiumWisudaController::class,            'show'])            ->name('yudisium-wisuda-fba.show');
    Route::post('admin/akademik/yudisium-wisuda-fba/header',                                [YudisiumWisudaController::class,            'header'])          ->name('yudisium-wisuda-fba.header');
    Route::resource('admin/akademik/yudisium-wisuda-fba',                                   YudisiumWisudaController::class)   ->except(['show']);

    Route::resource('admin/akademik/pendaftaran-fba',                                       PendaftaranController::class)   ->except(['show']);

    // KEMAHASISWAAN
    Route::resource('admin/kemahasiswaan/info-kemahasiswaan/beasiswa-fba',                  BeasiswaController::class)   ->except(['show']);
    Route::get('beasiswa-fba',                                                              [BeasiswaController::class,            'show'])            ->name('beasiswa-fba.show');
    Route::post('admin/kemahasiswaan/info-kemahasiswaan/beasiswa-fba/header',               [BeasiswaController::class,            'header'])          ->name('beasiswa-fba.header');

    Route::resource('admin/kemahasiswaan/info-kemahasiswaan/prestasi-mahasiswa-fba',        PrestasiMahasiswaController::class)   ->except(['show']);
    Route::get('prestasi-mahasiswa-fba',                                                    [PrestasiMahasiswaController::class,            'show'])            ->name('prestasi-mahasiswa-fba.show');
    Route::post('admin/kemahasiswaan/info-kemahasiswaan/prestasi-mahasiswa-fba/header',     [PrestasiMahasiswaController::class,            'header'])          ->name('prestasi-mahasiswa-fba.header');

    Route::resource('admin/kemahasiswaan/ormawa-fba',                                      OrmawaController::class)   ->except(['show']);
    Route::post('admin/kemahasiswaan/ormawa/BEM-fba/header',                                [OrmawaController::class,            'header'])          ->name('ormawa-fba.header');

    // BERITA
    Route::resource('admin/berita/informasi-fba',                                           InformasiController::class)   ->except(['show']);
    Route::get('informasi-fba',                                                             [InformasiController::class,            'show'])            ->name('informasi-fba.show');
    Route::post('admin/berita/informasi-fba/header',                                        [InformasiController::class,            'header'])          ->name('informasi-fba.header');

    Route::resource('admin/berita/pengumuman-fba',                                          PengumumanController::class)   ->except(['show']);
    Route::get('pengumuman-fba',                                                            [PengumumanController::class,            'show'])            ->name('pengumuman-fba.show');
    Route::post('admin/berita/pengumuman-fba/header',                                       [PengumumanController::class,            'header'])          ->name('pengumuman-fba.header');

    Route::resource('admin/berita/agenda-fba',                                              AgendaController::class)   ->except(['show']);
    Route::get('agenda-fba',                                                                [AgendaController::class,            'show'])            ->name('agenda-fba.show');
    Route::post('admin/berita/agenda-fba/header',                                           [AgendaController::class,            'header'])          ->name('agenda-fba.header');

    // ALUMNI
    Route::resource('admin/alumni/tentang-alumni-fba',                                      TentangAlumniController::class)   ->except(['show']);
    Route::get('tentang-alumni-fba',                                                        [TentangAlumniController::class,            'show'])            ->name('tentang-alumni-fba.show');
    Route::post('admin/alumni/tentang-alumni-fba/header',                                   [TentangAlumniController::class,            'header'])          ->name('tentang-alumni-fba.header');

    Route::resource('admin/alumni/ikatan-alumni-fba',                                       IkatanAlumniController::class)   ->except(['show']);
    Route::get('ikatan-alumni-fba',                                                         [IkatanAlumniController::class,            'show'])            ->name('ikatan-alumni-fba.show');
    Route::post('admin/alumni/ikatan-alumni-fba/header',                                    [IkatanAlumniController::class,            'header'])          ->name('ikatan-alumni-fba.header');

    Route::resource('admin/alumni/tracer-study-fba',                                        TracerStudyController::class)   ->except(['show']);

    Route::resource('admin/alumni/peluang-kerja-fba',                                       PeluangKerjaController::class)   ->except(['show']);
    Route::get('peluang-kerja-fba',                                                         [PeluangKerjaController::class,            'show'])            ->name('peluang-kerja-fba.show');
    Route::post('admin/alumni/peluang-kerja-fba/header',                                    [PeluangKerjaController::class,            'header'])          ->name('peluang-kerja-fba.header');

    // INFORMASI PUBLIK
    Route::resource('admin/informasi-publik/zona-integritas/pakta-integritas-fba',          PaktaIntegritasController::class)   ->except(['show']);
    Route::get('pakta-integritas-fba',                                                      [PaktaIntegritasController::class,            'show'])            ->name('pakta-integritas-fba.show');
    Route::post('admin/informasi-publik/zona-integritas/pakta-integritas-fba/header',       [PaktaIntegritasController::class,            'header'])          ->name('pakta-integritas-fba.header');

    Route::resource('admin/informasi-publik/zona-integritas/aturan-gratifikasi-fba',        AturanGratifikasiController::class)   ->except(['show']);
    Route::get('aturan-gratifikasi-fba',                                                    [AturanGratifikasiController::class,            'show'])            ->name('aturan-gratifikasi-fba.show');
    Route::post('admin/informasi-publik/zona-integritas/aturan-gratifikasi-fba/header',     [AturanGratifikasiController::class,            'header'])          ->name('aturan-gratifikasi-fba.header');

    Route::resource('admin/informasi-publik/zona-integritas/dokumen-zona-integritas-fba',   DokumenZonaIntegritasController::class)   ->except(['show']);
    Route::get('dokumen-zona-integritas-fba',                                               [DokumenZonaIntegritasController::class,            'show'])            ->name('dokumen-zona-integritas-fba.show');
    Route::post('admin/informasi-publik/zona-integritas/dokumen-zona-integritas-fba/header',[DokumenZonaIntegritasController::class,            'header'])          ->name('dokumen-zona-integritas-fba.header');


    Route::resource('admin/informasi-publik/download-dokumen/uniba-madura-expo-fba',               UnibaMaduraExpoController::class)   ->except(['show']);
    Route::get('uniba-madura-expo-fba',                                                     [UnibaMaduraExpoController::class,            'show'])            ->name('uniba-madura-expo-fba.show');
    Route::post('admin/informasi-publik/download-dokumen/uniba-madura-expo-fba/header',     [UnibaMaduraExpoController::class,            'header'])          ->name('uniba-madura-expo-fba.header');

    Route::resource('admin/informasi-publik/download-dokumen/sop-fba',                      SOPController::class)   ->except(['show']);
    Route::get('sop-fba',                                                                   [SOPController::class,            'show'])            ->name('sop-fba.show');
    Route::post('admin/informasi-publik/download-dokumen/sop-fba/header',                   [SOPController::class,            'header'])          ->name('sop-fba.header');



});
// profil
// Route::get('profil/visi-misi-tujuan-fba',           [ProfilController::class, 'visiMisiIndex']);            //index
// Route::get('profil/staff-dosen',                    [ProfilController::class, 'staffDosenIndex']);          //index
// Route::get('profil/tenaga-kependidikan',            [ProfilController::class, 'tendikIndex']);              //index
// Route::get('profil/pimpinan-fakultas',              [ProfilController::class, 'pimFakIndex']);              //index
// Route::get('profil/identitas-fba',                  [ProfilController::class, 'identitasIndex']);           //index
// Route::get('profil/struktur-organisasi',            [ProfilController::class, 'strukOrgIndex']);            //index

// // akademik
// Route::get('akademik/panduan-pendidikan-fba',       [AkademikController::class, 'panPendikIndex']);         //index
// Route::get('akademik/program-studi',                [AkademikController::class, 'progStuIndex']);           //index
// Route::get('akademik/kalender-akademik',            [AkademikController::class, 'kalAkIndex']);             //index
// Route::get('akademik/kemahasiswaan',                [AkademikController::class, 'KemHasIndex']);            //index

// // penelitian
// Route::resource('penelitian',                       PenelitianController::class);                           //resources

// // berita
// Route::get('berita/terkini',                        [BeritaController::class, 'berTerIndex']);              //index
// Route::get('berita/agenda',                         [BeritaController::class, 'berAgenIndex']);             //index
// Route::get('berita/laporan',                        [BeritaController::class, 'berLapIndex']);              //index
