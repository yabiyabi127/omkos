<?php 
$session = $this->session->userdata('login');
if ($this->session->login['status'] == 'login') {
    redirect(base_url("kost"));
}
 ?>
<body>
    <div class="ui centered grid">
        <div class="computer only row">
            <div class="four wide computer column" style="margin-top: 10%;">
                <form action="<?= base_url('login/aksi_login');  ?>" method="POST">
                    <div class="ui segment">
                        <div class="ui form">
                            <div class="field">
                                <label>EMAIL</label>
                                <input name="username" placeholder="exp@mail.com" type="text">
                            </div>
                            <div class="field">
                                <label>PASSWORD</label>
                                <input name="password" placeholder="PASSWORD" type="password">
                            </div>
                        </div>  
                        <br>
                        <button style="width: 100%;" class="ui blue button">
                            <i class="sign in alternate icon"></i>
                            LOGIN
                        </button>
                        <br><br>
                        <a href="<?= base_url('login/register');  ?>" style="width: 100%;" class="ui blue button" style="padding-top: 40px">
                            <i class="sign in alternate icon"></i>
                            REGISTER
                        </a>
                        <br><br>
                        <div style="text-align: right;">
                            <a href="reset.php">Lupa Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="tablet and mobile only row">
            <div class="sixteen wide computer column" style="margin-top: 10%;">
            <form action="<?= base_url('login/aksi_login');  ?>" method="POST">
                <div class="ui segment">
                    <div class="ui form">
                        <div class="field">
                            <label>EMAIL</label>
                            <input name="username" placeholder="exp@mail.com" type="text">
                        </div>
                        <div class="field">
                            <label>PASSWORD</label>
                            <input name="password" placeholder="PASSWORD" type="password">
                        </div>
                    </div>  
                    <br>
                    <button style="width: 100%;" class="ui blue button">
                        <i class="sign in alternate icon"></i>
                        LOGIN
                    </button>
                    <br><br>
                    <a href="<?= base_url('login/register');  ?>" style="width: 100%;" class="ui blue button" style="padding-top: 40px">
                        <i class="sign in alternate icon"></i>
                        REGISTER
                    </a>
                    <br><br>
                    <div style="text-align: right;">
                        <a href="reset.php">Lupa Password?</a>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</body>
<?= $this->session->login['message'] ?>
<?php 

$data_session = array(
'message'=>'',
'status'=>''
);
$this->session->set_userdata('login',$data_session);

 ?>