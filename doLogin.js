function doLogin() {
    document.sendin.username.value = document.login.username.value;
    document.sendin.password.value = hexMD5('\214' + document.login.password.value + '\321\275\247\343\242\346\252\212\222\163\152\065\022\213\331\246');
    document.sendin.submit();
    return false;
    }