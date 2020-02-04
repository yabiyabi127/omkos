<body>
    <div class="ui centered grid">
        <div class="computer only row">
        <div class="four wide computer column" style="margin-top: 10%;">
            <form action="<?= base_url('login/aksiregister');  ?>" method="POST">
                <div class="ui segment">
                    <div class="ui form">
                        <div class="field">
                            <label>Nama lengkap</label>
                            <input name="nama_pemilik" placeholder="Nama" type="text">
                        </div>
                        <div class="field">
                            <label>No HP</label>
                            <input name="kontak_pemilik" placeholder="No hp" type="text">
                        </div>
                        <div class="field">
                            <label>Email</label>
                            <input name="email" placeholder="exp@mail.com" type="email">
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <input name="password" placeholder="Password" type="password">
                        </div>
                    </div>  
                    <br>

                    <button style="width: 100%;" class="ui blue button">
                        <i class="sign in alternate icon"></i>
                        REGISTER
                    </button>
                    
                    <br><br>
                    <div style="text-align: right;">
                        <a href="<?= base_url('login/index');  ?>">Sudah mempunyai akun?</a>
                    </div>
                </div>
            </form>
        </div>
        </div>

        <div class="tablet and mobile only row">
        <div class="fourteen wide computer column" style="margin-top: 10%;">
            <form action="<?= base_url('login/aksiregister');  ?>" method="POST">
                <div class="ui segment">
                    <div class="ui form">
                        <div class="field">
                            <label>Nama lengkap</label>
                            <input name="nama_pemilik" placeholder="Nama" type="text">
                        </div>
                        <div class="field">
                            <label>No HP</label>
                            <input name="kontak_pemilik" placeholder="No hp" type="text">
                        </div>
                        <div class="field">
                            <label>Email</label>
                            <input name="email" placeholder="exp@mail.com" type="email">
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <input name="password" placeholder="Password" type="password">
                        </div>
                    </div>  
                    <br>

                    <button style="width: 100%;" class="ui blue button">
                        <i class="sign in alternate icon"></i>
                        REGISTER
                    </button>
                    
                    <br><br>
                    <div style="text-align: right;">
                        <a href="<?= base_url('login/index');  ?>">Sudah mempunyai akun?</a>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</body>