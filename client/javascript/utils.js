const ONE_DAY = 24 * 60 * 60 * 1000;

export const setCookie = (name, value, days) => {
    let expires;

    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * ONE_DAY));

        expires = `; expires=${date.toGMTString()}`;
    } else {
        expires = '';
    }
    document.cookie = `${name}=${value}${expires}; path=/`;
};
