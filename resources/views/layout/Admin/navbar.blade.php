
    <div class="mdl-layout__drawer">
        <header>SIIB</header>
        <div class="scroll__wrapper" id="scroll__wrapper">
            <div class="scroller" id="scroller">
                <div class="scroll__container" id="scroll__container">
                    <nav class="mdl-navigation">
                        <a class="mdl-navigation__link mdl-navigation__link--current" href="{{ route('home') }}">
                            <i class="material-icons" role="presentation">dashboard</i>
                            Dashboard
                        </a>
                        <div class="sub-navigation">
                            <a class="mdl-navigation__link">
                                <i class="material-icons">view_comfy</i>
                                Database
                                <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                            <div class="mdl-navigation">
                                <a class="mdl-navigation__link" href="/create_data_balita">
                                    Creat
                                </a>
                                <a class="mdl-navigation__link" href="/data_balita">
                                    Read
                                </a>
                                <a class="mdl-navigation__link" href="/update_data_balita">
                                    Update
                                </a>
                                <a class="mdl-navigation__link" href="/delete_data_balita">
                                    Delete
                                </a>
                            </div>
                        </div>
                        <a class="mdl-navigation__link" href="/jadwal_imunisasi_admin">
                            <i class="material-icons">developer_board</i>
                            Jadwal Imunisasi
                        </a>
                        <a class="mdl-navigation__link" href="/login">
                            <i class="material-icons" role="presentation">person</i>
                            Login Administrator
                        </a>
                        <div class="mdl-layout-spacer"></div>
                        <hr>
                        <a class="mdl-navigation__link" href="{{ route('logout') }}">
                            <i class="material-icons" role="presentation">link</i>
                            Logout
                        </a>
                    </nav>
                </div>
            </div>
            <div class='scroller__bar' id="scroller__bar"></div>
        </div>
    </div>