function login() {
    const form = document.login_form;
    const chID = checkValidID(form);
    const chkPassword = checkValidPassword(form);

    if (chkID) {
        document.getElementById('alert_ID').innerText = "";
        form.ID.style.border = '2px solid';
        form.ID.style.borderColor = '#00D000';
    } else {
        form.ID.style.border = '2px solid';
        form.ID.style.borderColor = '#FF0000';
        document.getElementById('alert_ID').style.color = '#FF0000';
    }

    if (chkPassword) {
        document.getElementById('alert_Password').innerText = "";
        form.Password.style.border = '2px solid';
        form.Password.style.borderColor = '#00D000';
    } else {
        form.Password.style.border = '2px solid';
        form.Password.style.borderColor = '#FF0000';
        document.getElementById('alert_Password').style.color = '#FF0000';
    }
    if (chkUsername && chkPassword) {
        console.log('complete. form.submit();');
        //form.submit();
    }
}

function checkValidID(form) {
    if (form.ID.value == "") {
        document.getElementById('alert_ID').innerText = "Please enter username.";
        //form.username.focus();
        return false;
    }

    return true;
}

function checkValidPassword(form) {
    if (form.Password.value == "") {
        document.getElementById('alert_Password').innerText = "Please enter email.";
        //form.email.focus();
        return false;
    }

    const pw = form.Password.value;
    // String.prototype.search() :: 검색된 문자열 중에 첫 번째로 매치되는 것의 인덱스를 반환한다. 찾지 못하면 -1 을 반환한다.
    // number
    const num = pw.search(/[0-9]/g);
    // alphabet
    const eng = pw.search(/[a-z]/ig);
    // special characters
    const spe = pw.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

    if (pw.length < 6) {
        // 최소 6문자.
        document.getElementById('alert_Password').innerText = "Password must be at least 6 characters.";
        return false;
    } else if (pw.search(/\s/) != -1) {
        // 공백 제거.
        document.getElementById('alert_Password').innerText = "Please enter your password without spaces.";
        return false;
    } else if (num < 0 && eng < 0 && spe < 0) {
        // 한글과 같은 문자열 입력 방지.
        document.getElementById('alert_Password').innerText = "Password is not valid.";
        return false;
    }

    return true;
}