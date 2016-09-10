import test from 'ava';
import {
    dateString,
    ordinalDate,
    monthNames,
} from '../javascript/formatters';

test('dateString builder', t => {
    let date = new Date('2016-03-08 01:15:00');

    const dateString = `${monthNames[date.getMonth()]} ${ordinalDate(date.getDate())}, ${date.getFullYear()}`
    const result = 'March 8th, 2016';
    t.is(dateString, result);
});
