export const monthNames = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
];

export const currencyMapping = {
    'USD': '$'
};

export const ordinalDate = (date) => {
    const nth = {
        '1': 'st',
        '2': 'nd',
        '3': 'rd',
        '21': 'st',
        '22': 'nd',
        '23': 'rd',
        '31': 'st'
    };

    return `${date}${nth[date] || 'th'}`;
};

export const dateString = (d) => {
    if (d.split(' ').length < 2) {
        d = `${d} 12:00:00`;
    }
    const date = new Date(d);

    return `${monthNames[date.getMonth()]} ${ordinalDate(date.getDate())}, ${date.getFullYear()}`;
};
