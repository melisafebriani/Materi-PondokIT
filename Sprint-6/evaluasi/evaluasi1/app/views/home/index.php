<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p>
        <form action="<?= BASEURL;?>/home/index" method="post">
          <table width="400" border="0" align="center ">
            <thead>
              <tr name="login" style="text-align: center"><th colspan="2"><h1></h1>HAII..<br mt-5> SILAKAN LOGIN </h1></th></tr>
            </thead>
              <tr>
                <td style="text-align: center">Email :</td>
                <td><input type="text" name="email" size="30" placeholder="Masukan Email" maxlength="60" value="email"></td>
              </tr>
              <tr>
                <td style="text-align: center">Password :</td>
                <td><input type="password" name="password" size="30" placeholder="Masukan Password" maxlength="15"></td>
              </tr>
              <tr>
              <td colspan="2" style="text-align: center"><button type="submit" name="submit">LOGIN</button></td>
              </tr>
          </table>
        </form>
      </div>
    </p>
  </div>
</div>

