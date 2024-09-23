console.log('App JS')
/** 
 * @param { Object } Object - receives url, data, success, error
 * @param { Object.url } url - url/api
 * @param { Object.data } data @type { Array } - Array of object { name: 'name' }
 * @param { Object.success } success - Return success function
 * @param { Object.error } error - Return error function
 */
console.log('App JS')
const CURRENT_URL = window.location.pathname.includes('banco') ? 'banco' : 'prefacturacion';
function AJAX({
    url,
    data = [],
    success,
    error
}) {
    let req = (window.XMLHttpRequest) ? new XMLHttpRequest() : ActiveXObject('Microsoft.XMLHTTP');
    req.open("POST", BASE_URL + url, true);

    function dataFn() {
        let insideData = '';
        data.map((x) => {
            Object.keys(x).map((field, indexField) => {
                if (indexField == 0) {
                    if (Object.values(x)[indexField] != null) {
                        insideData += Object.keys(x)[indexField] + '=' + (Array.isArray(Object.values(x)[indexField]) ? JSON.stringify(Object.values(x)[indexField]) : Object.values(x)[indexField].toString().trim())
                    }
                } else {
                    insideData += '&' + Object.keys(x)[indexField] + '=' + (Array.isArray(Object.values(x)[indexField]) ? JSON.stringify(Object.values(x)[indexField]) : (typeof Object.values(x)[indexField] == 'string' ? Object.values(x)[indexField].trim() : Object.values(x)[indexField]))
                }
            })
            if (data.length > 1) {
                insideData += '__';
            }
        });
        if (data.length > 1) {
            insideData = 'arrData=' + JSON.stringify(data);
        }
        return insideData;
    }
    req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    req.send(dataFn())
    req.onreadystatechange = (e) => {
        if (req.readyState == 4 && req.status == 200) {
            if (req.status == 200) {
                success(req.responseText);
            } else {
                error(req.status);
            }
        }
    }
}

/**
 * 
 * @param { Object } Object - receives el and res
 * @param { Object.el } el - receives HTMLElement for click
 * @param { Object.res } res - return function
 * @return { EventTarget } - return events
 */
function onclick({
    el,
    res
}) {
    if (el) {
        if (typeof el == 'string') {
            if (document.querySelector(`${el}`) != null || document.querySelector(`${el}`) != undefined) {
                document.querySelector(`${el}`).addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    res(e);
                })
            }
        } else {
            if (el != null || el != undefined) {
                el.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    res(e);
                });
            }
        }
    }
}
// View Html
function viewHtml({
    el,
    content
}) {
    if (el != undefined) {
        rippleFunction();
        switchs();
        if (typeof el == 'string') {
            if (document.querySelector(`${el}`) != null || document.querySelector(`${el}`) != undefined) {
                document.querySelector(`${el}`).innerHTML += content;
            }
        } else {
            el.innerHTML += content;
        }
    }
}

// Clean Html
function cleanHtml(el) {
    if (el) {
        if (typeof el == 'string') {
            if (document.querySelector(`${el}`) != null || document.querySelector(`${el}`) != undefined) {
                document.querySelector(`${el}`).innerHTML = '';
            }
        } else {
            el.innerHTML = '';
        }
    }
}
// Element Valid 
function validElement(el) {
    if (el) {
        return el;
    }
}
/**
 * 
 * @param { Selector } el 
 * @returns HTMLElement
 */
function el(el) {
    if (el != null || el != undefined) {
        return document.querySelector(el)
    }
}
/**
 * 
 * @param { Object } Object - receive @param { HTMLElement } el
 * @returns { Function } res
 */
function submit({
    el,
    res
}) {

    if (el != null) {
        el.addEventListener('submit', function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            res(e);
        });
    }
}
/**
 * 
 * @param { Selector } el 
 * @returns { Array }
 */
function getAllElements({
    el
}) {
    return [...document.querySelectorAll(el)];
}

function getNumber(number) {
    number = Number(number);
    return number.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function positiveOrNegative(num) {
	return num > 0 ? true : false;
}

function getUppercase(str) {
    return str.at(0).toUpperCase() + str.slice(1, str.length);
}

const viewPassword = document.querySelectorAll('.field-password'); 
viewPassword.forEach(el => {
    const trigger = el.querySelector('i.view-password');
    const input = el.querySelector('input');
    trigger.onclick = (e) => {
        e.preventDefault();
        if (input.type == 'password') {
            input.type = 'text';
            trigger.textContent = 'visibility_off';
        } else {
            input.type = 'password';
            trigger.textContent = 'visibility';
        }
    }
});
// Tabs
// const tabs = document.querySelectorAll('.tabs');
// tabs.forEach(main => {
//     const tabsItem = main.querySelectorAll('li');
//     const tabsContent = main.querySelectorAll('.tab-content');

//     tabsItem.forEach(tab => {
//         tab.onclick = (e) => {
//             e.preventDefault();
//             tabsItem.forEach(el => {
//                 el.children[0].classList.remove('text-blue-600,', 'border-b-2', 'border-blue-600');
//             });
//             tab.children[0].classList.add('text-blue-600,', 'border-b-2', 'border-blue-600')
//         }
//     })
// });
const overlay = document.querySelector('.overlay');
const sidebar = document.querySelector('.sidebar');
const triggerSidebar = document.querySelector('.trigger-sidebar');
const closeSidebar = document.querySelector('.close-sidebar');
if (triggerSidebar) {
    triggerSidebar.onclick = (e) => {
        sidebar.classList.remove('hidden');
        console.log('Open sidebar')
    }
    [overlay, closeSidebar].map(item => {
        item.onclick = (e) => {
            console.log('Close sidebar')
            sidebar.classList.add('hidden');
        }
    });
}

// Login and register
const login = document.querySelector('.login');
const triggerLogin = document.querySelectorAll('.trigger-login');
triggerLogin.forEach(el => {
    el.onclick = (e) => {
        e.preventDefault();
        login.classList.remove('right-[-400px]');
    }
});

const closeLogin = document.querySelector('.close-login');
if (!!closeLogin) {
    closeLogin.onclick = (e) => {
        e.preventDefault();
        login.classList.add('right-[-400px]');
    }

    const signUp = document.querySelector('.sign-up');
    const signIn = document.querySelector('.sign-in');
    const triggerSign = document.querySelectorAll('.trigger-sign');
    triggerSign.forEach(el => {
        
        el.onclick = (e) => {
            e.preventDefault();
            if (signUp.classList.contains('hidden')) {
                signUp.classList.remove('hidden');
                signIn.classList.add('hidden');
            } else {
                signIn.classList.remove('hidden');
                signUp.classList.add('hidden');
            }
        }
    });
}
