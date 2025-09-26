<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('admin/images/logo.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">FBA UNIBA MADURA</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item @yield('profile-active')">
        <a class="nav-link @yield('profile-collapsed')" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fas fa-database"></i>
            <span>Profil</span>
        </a>
        <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Data</h6> --}}
                <a class="collapse-item @yield('sejarah-fba-active')" href="{{ route('sejarah-fba.index') }}"> Sejarah Fakultas</a>
                <a class="collapse-item @yield('visi-misi-tujuan-fba-active')" href="{{ route('visi-misi-tujuan-fba.index') }}"> Visi, Misi
                    dan Tujuan Fakultas</a>
                <a class="collapse-item @yield('profil-pimpinan-fakultas-active')" href="{{ route('pimpinan-fba.index') }}">Profil Pimpinan
                    Fakultas</a>
                <a class="collapse-item @yield('profil-staff-dosen-active')" href="{{ route('staff-dosen-fba.index') }}">Profil Staff
                    Dosen</a>
                <a class="collapse-item @yield('fasilitas-fba-active')" href="{{ route('fasilitas-fba.index') }}">Fasilitas FBA</a>
                <a class="collapse-item @yield('akreditasi-fba-active')" href="{{ route('akreditasi-fba.index') }}">Akreditasi FBA</a>
            </div>
        </div>
    </li>
    <li class="nav-item @yield('akademik-active')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fas fa-database"></i>
            <span>Akademik</span>
        </a>
        <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Data</h6> --}}
                <a class="collapse-item @yield('panduan-pendidikan-fba-active')" href="{{ route('panduan-pendidikan-fba.index') }}">Panduan
                    Pendidikan FBA</a>
                <a class="collapse-item @yield('program-studi-active')" href="{{ route('program-studi-fba.index') }}">Program Studi</a>
                <a class="collapse-item @yield('kalender-akademik-active')" href="{{ route('kalender-akademik-fba.index') }}">Kalender Akademik</a>
                <a class="collapse-item @yield('yudisium-wisuda-fba-active')" href="{{ route('yudisium-wisuda-fba.index') }}">Yudisium & Wisuda</a>
            </div>
        </div>
    </li>
    <li class="nav-item @yield('pendaftaran-active')">
        <a class="nav-link" href="{{ route('pendaftaran-fba.index') }}">
            <i class="fas fa-user-graduate"></i>
            <span>Pendaftaran</span>
        </a>
    </li>
    <li class="nav-item @yield('kemahasiswaan-active')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap3"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fas fa-database"></i>
            <span>Kemahasiswaan</span>
        </a>
        <div id="collapseBootstrap3" class="collapse" aria-labelledby="headingBootstrap">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap10"
                    aria-expanded="true" aria-controls="collapseBootstrap10">
                    <span>Info Kemahasiswaan</span>
                </a>
                <div id="collapseBootstrap10" class="collapse"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item @yield('beasiswa-active')" href="{{route('beasiswa-fba.index')}}">Beasiswa</a>
                        <a class="collapse-item @yield('prestasi-mahasiswa-fba-active')" href="{{route('prestasi-mahasiswa-fba.index')}}">Prestasi Mahasiswa</a>
                    </div>
                </div>
            </div>
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Data</h6> --}}
                <a class="collapse-item @yield('ormawa-active')" href="{{route('ormawa-fba.index')}}">Ormawa</a>
            </div>
        </div>
    </li>
    <li class="nav-item @yield('berita-active')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap5"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fas fa-database"></i>
            <span>Berita</span>
        </a>
        <div id="collapseBootstrap5" class="collapse" aria-labelledby="headingBootstrap"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Data</h6> --}}
                <a class="collapse-item @yield('informasi-active')" href="{{route('informasi-fba.index')}}">Informasi</a>
                <a class="collapse-item @yield('pengumuman-active')" href="{{route('pengumuman-fba.index')}}">Pengumuman</a>
                <a class="collapse-item @yield('agenda-active')" href="{{route('agenda-fba.index')}}">Agenda</a>
            </div>
        </div>
    </li>
    <li class="nav-item @yield('alumni-active')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap7"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fas fa-database"></i>
            <span>Alumni</span>
        </a>
        <div id="collapseBootstrap7" class="collapse" aria-labelledby="headingBootstrap"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Data</h6> --}}
                <a class="collapse-item @yield('tentang-alumni-active')" href="{{ route('tentang-alumni-fba.index') }}">Tentang Alumni FBA</a>
                <a class="collapse-item @yield('ikatan-alumni-active')" href="{{ route('ikatan-alumni-fba.index') }}">Ikatan Alumni FBA</a>
                <a class="collapse-item @yield('tracer-study-active')" href="{{ route('tracer-study-fba.index') }}">Tracer Study</a>
                <a class="collapse-item @yield('peluang-kerja-active')" href="{{ route('peluang-kerja-fba.index') }}">Peluang Kerja</a>
            </div>
        </div>
    </li>
    {{-- <li class="nav-item @yield('informasi-publik-active')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap20"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fas fa-database"></i>
            <span>Informasi Publik</span>
        </a>
        <div id="collapseBootstrap20" class="collapse" aria-labelledby="headingBootstrap">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap21"
                    aria-expanded="true" aria-controls="collapseBootstrap15">
                    <span>Zona integritas</span>
                </a>
                <div id="collapseBootstrap21" class="collapse"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item @yield('pakta-integritas-active')" href="{{route('pakta-integritas-fba.index')}}">Pakta Integritas</a>
                        <a class="collapse-item @yield('aturan-gratifikasi-active')" href="{{route('aturan-gratifikasi-fba.index')}}">Aturan Gratifikasi</a>
                        <a class="collapse-item @yield('dokumen-zona-integritas-active')" href="{{route('dokumen-zona-integritas-fba.index')}}">Dokumen Zona Integritas</a>
                    </div>
                </div>
            </div>
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap22"
                    aria-expanded="true" aria-controls="collapseBootstrap10">
                    <span>Download Document</span>
                </a>
                <div id="collapseBootstrap22" class="collapse"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item @yield('uniba-madura-expo-active')" href="{{route('uniba-madura-expo-fba.index')}}">UNIBA Madura EXPO</a>
                        <a class="collapse-item @yield('sop-active')" href="{{route('sop-fba.index')}}">SOP</a>
                    </div>
                </div>
            </div>
        </div>
    </li> --}}
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
