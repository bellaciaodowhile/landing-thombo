console.log('Landing Page')


const formRegister = el('.sign-up');
const formLogin = el('.sign-in');

submit({
    el: formRegister,
    res: function (res) {
        let name = formRegister.querySelector('input[name="name"]').value
        let lastname = formRegister.querySelector('input[name="lastname"]').value
        let email = formRegister.querySelector('input[name="email"]').value
        let password = formRegister.querySelector('input[name="password"]').value
        let repeatPassword = formRegister.querySelector('input[name="repeat_password"]').value

        const signUp = document.querySelector('.sign-up');
        const signIn = document.querySelector('.sign-in');
        
        AJAX({
            url: 'Usuarios/setUser',
            data: [{
                name, lastname, email, password, repeatPassword
            }],
            success: function (res) {
                console.log(res)
                res = JSON.parse(res);
                console.log(res)
                if (res.status) {
                    // window.location = BASE_URL + 'banco/dashboard';
                    signIn.classList.remove('hidden');
                    signUp.classList.add('hidden');
                    Toastify({
                        text: 'Successfull!',
                        className: "success",
                      }).showToast();
                } else {
                    Toastify({
                        text: res.msg,
                        className: "error",
                      }).showToast();
                }
                // Listo el registro de usuarios, me hace falta el inicio de sesión
            }
        });
    }
});

submit({
    el: formLogin,
    res: function (res) {
        let email = formLogin.querySelector('input[name="email"]').value
        let password = formLogin.querySelector('input[name="password"]').value


        AJAX({
            url: 'Usuarios/login',
            data: [{
                email, password
            }],
            success: function (res) {
                console.log(res)
                res = JSON.parse(res);
                console.log(res)
                if (res.status) {
                    window.location = BASE_URL;
                    Toastify({
                        text: 'Successfull!',
                        className: "success",
                      }).showToast();
                } else {
                    Toastify({
                        text: res.msg,
                        className: "error",
                      }).showToast();
                }
                // Listo el registro de usuarios, me hace falta el inicio de sesión
            }
        });
    }
});

const buyNow = document.querySelector('.buy-now');
const sellNow = document.querySelector('.sell-now');
[buyNow, sellNow].map(item => {
    item.onclick = (e) => {
        item.href = BASE_URL + 'buy';
        if (!LOGIN) {
            item.href = '#';
            login.classList.remove('right-[-400px]');
        } 
    }
})