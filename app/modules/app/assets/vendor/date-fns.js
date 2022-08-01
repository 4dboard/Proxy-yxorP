(function webpackUniversalModuleDefinition(root, factory) {
    if (typeof exports === "object" && typeof module === "object") module.exports = factory(); else if (typeof define === "function" && define.amd) define([], factory); else if (typeof exports === "object") exports["dateFns"] = factory(); else root["dateFns"] = factory()
})(this, function () {
    return function (modules) {
        const installedModules = {};

        function __webpack_require__(moduleId) {
            if (installedModules[moduleId]) return installedModules[moduleId].exports;
            const module = installedModules[moduleId] = {exports: {}, id: moduleId, loaded: false};
            modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
            module.loaded = true;
            return module.exports
        }

        __webpack_require__.m = modules;
        __webpack_require__.c = installedModules;
        __webpack_require__.p = "";
        return __webpack_require__(0)
    }([function (module, exports, __webpack_require__) {
        module.exports = {
            addDays: __webpack_require__(1),
            addHours: __webpack_require__(4),
            addISOYears: __webpack_require__(6),
            addMilliseconds: __webpack_require__(5),
            addMinutes: __webpack_require__(14),
            addMonths: __webpack_require__(15),
            addQuarters: __webpack_require__(17),
            addSeconds: __webpack_require__(18),
            addWeeks: __webpack_require__(19),
            addYears: __webpack_require__(20),
            areRangesOverlapping: __webpack_require__(21),
            closestIndexTo: __webpack_require__(22),
            closestTo: __webpack_require__(23),
            compareAsc: __webpack_require__(24),
            compareDesc: __webpack_require__(25),
            differenceInCalendarDays: __webpack_require__(12),
            differenceInCalendarISOWeeks: __webpack_require__(26),
            differenceInCalendarISOYears: __webpack_require__(27),
            differenceInCalendarMonths: __webpack_require__(28),
            differenceInCalendarQuarters: __webpack_require__(29),
            differenceInCalendarWeeks: __webpack_require__(31),
            differenceInCalendarYears: __webpack_require__(32),
            differenceInDays: __webpack_require__(33),
            differenceInHours: __webpack_require__(34),
            differenceInISOYears: __webpack_require__(36),
            differenceInMilliseconds: __webpack_require__(35),
            differenceInMinutes: __webpack_require__(38),
            differenceInMonths: __webpack_require__(39),
            differenceInQuarters: __webpack_require__(40),
            differenceInSeconds: __webpack_require__(41),
            differenceInWeeks: __webpack_require__(42),
            differenceInYears: __webpack_require__(43),
            distanceInWords: __webpack_require__(44),
            distanceInWordsStrict: __webpack_require__(49),
            distanceInWordsToNow: __webpack_require__(50),
            eachDay: __webpack_require__(51),
            endOfDay: __webpack_require__(52),
            endOfHour: __webpack_require__(53),
            endOfISOWeek: __webpack_require__(54),
            endOfISOYear: __webpack_require__(56),
            endOfMinute: __webpack_require__(57),
            endOfMonth: __webpack_require__(58),
            endOfQuarter: __webpack_require__(59),
            endOfSecond: __webpack_require__(60),
            endOfToday: __webpack_require__(61),
            endOfTomorrow: __webpack_require__(62),
            endOfWeek: __webpack_require__(55),
            endOfYear: __webpack_require__(63),
            endOfYesterday: __webpack_require__(64),
            format: __webpack_require__(65),
            getDate: __webpack_require__(70),
            getDay: __webpack_require__(71),
            getDayOfYear: __webpack_require__(66),
            getDaysInMonth: __webpack_require__(16),
            getDaysInYear: __webpack_require__(72),
            getHours: __webpack_require__(74),
            getISODay: __webpack_require__(75),
            getISOWeek: __webpack_require__(68),
            getISOWeeksInYear: __webpack_require__(76),
            getISOYear: __webpack_require__(7),
            getMilliseconds: __webpack_require__(77),
            getMinutes: __webpack_require__(78),
            getMonth: __webpack_require__(79),
            getOverlappingDaysInRanges: __webpack_require__(80),
            getQuarter: __webpack_require__(30),
            getSeconds: __webpack_require__(81),
            getTime: __webpack_require__(82),
            getYear: __webpack_require__(83),
            isAfter: __webpack_require__(84),
            isBefore: __webpack_require__(85),
            isDate: __webpack_require__(3),
            isEqual: __webpack_require__(86),
            isFirstDayOfMonth: __webpack_require__(87),
            isFriday: __webpack_require__(88),
            isFuture: __webpack_require__(89),
            isLastDayOfMonth: __webpack_require__(90),
            isLeapYear: __webpack_require__(73),
            isMonday: __webpack_require__(91),
            isPast: __webpack_require__(92),
            isSameDay: __webpack_require__(93),
            isSameHour: __webpack_require__(94),
            isSameISOWeek: __webpack_require__(96),
            isSameISOYear: __webpack_require__(98),
            isSameMinute: __webpack_require__(99),
            isSameMonth: __webpack_require__(101),
            isSameQuarter: __webpack_require__(102),
            isSameSecond: __webpack_require__(104),
            isSameWeek: __webpack_require__(97),
            isSameYear: __webpack_require__(106),
            isSaturday: __webpack_require__(107),
            isSunday: __webpack_require__(108),
            isThisHour: __webpack_require__(109),
            isThisISOWeek: __webpack_require__(110),
            isThisISOYear: __webpack_require__(111),
            isThisMinute: __webpack_require__(112),
            isThisMonth: __webpack_require__(113),
            isThisQuarter: __webpack_require__(114),
            isThisSecond: __webpack_require__(115),
            isThisWeek: __webpack_require__(116),
            isThisYear: __webpack_require__(117),
            isThursday: __webpack_require__(118),
            isToday: __webpack_require__(119),
            isTomorrow: __webpack_require__(120),
            isTuesday: __webpack_require__(121),
            isValid: __webpack_require__(69),
            isWednesday: __webpack_require__(122),
            isWeekend: __webpack_require__(123),
            isWithinRange: __webpack_require__(124),
            isYesterday: __webpack_require__(125),
            lastDayOfISOWeek: __webpack_require__(126),
            lastDayOfISOYear: __webpack_require__(128),
            lastDayOfMonth: __webpack_require__(129),
            lastDayOfQuarter: __webpack_require__(130),
            lastDayOfWeek: __webpack_require__(127),
            lastDayOfYear: __webpack_require__(131),
            max: __webpack_require__(132),
            min: __webpack_require__(133),
            parse: __webpack_require__(2),
            setDate: __webpack_require__(134),
            setDay: __webpack_require__(135),
            setDayOfYear: __webpack_require__(136),
            setHours: __webpack_require__(137),
            setISODay: __webpack_require__(138),
            setISOWeek: __webpack_require__(139),
            setISOYear: __webpack_require__(10),
            setMilliseconds: __webpack_require__(140),
            setMinutes: __webpack_require__(141),
            setMonth: __webpack_require__(142),
            setQuarter: __webpack_require__(143),
            setSeconds: __webpack_require__(144),
            setYear: __webpack_require__(145),
            startOfDay: __webpack_require__(13),
            startOfHour: __webpack_require__(95),
            startOfISOWeek: __webpack_require__(8),
            startOfISOYear: __webpack_require__(11),
            startOfMinute: __webpack_require__(100),
            startOfMonth: __webpack_require__(146),
            startOfQuarter: __webpack_require__(103),
            startOfSecond: __webpack_require__(105),
            startOfToday: __webpack_require__(147),
            startOfTomorrow: __webpack_require__(148),
            startOfWeek: __webpack_require__(9),
            startOfYear: __webpack_require__(67),
            startOfYesterday: __webpack_require__(149),
            subDays: __webpack_require__(150),
            subHours: __webpack_require__(151),
            subISOYears: __webpack_require__(37),
            subMilliseconds: __webpack_require__(152),
            subMinutes: __webpack_require__(153),
            subMonths: __webpack_require__(154),
            subQuarters: __webpack_require__(155),
            subSeconds: __webpack_require__(156),
            subWeeks: __webpack_require__(157),
            subYears: __webpack_require__(158)
        }
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function addDays(dirtyDate, dirtyAmount) {
            const date = parse(dirtyDate);
            const amount = Number(dirtyAmount);
            date.setDate(date.getDate() + amount);
            return date
        }

        module.exports = addDays
    }, function (module, exports, __webpack_require__) {
        const isDate = __webpack_require__(3);
        const MILLISECONDS_IN_HOUR = 36e5;
        const MILLISECONDS_IN_MINUTE = 6e4;
        const DEFAULT_ADDITIONAL_DIGITS = 2;
        const parseTokenDateTimeDelimeter = /[T ]/;
        const parseTokenPlainTime = /:/;
        const parseTokenYY = /^(\d{2})$/;
        const parseTokensYYY = [/^([+-]\d{2})$/, /^([+-]\d{3})$/, /^([+-]\d{4})$/];
        const parseTokenYYYY = /^(\d{4})/;
        const parseTokensYYYYY = [/^([+-]\d{4})/, /^([+-]\d{5})/, /^([+-]\d{6})/];
        const parseTokenMM = /^-(\d{2})$/;
        const parseTokenDDD = /^-?(\d{3})$/;
        const parseTokenMMDD = /^-?(\d{2})-?(\d{2})$/;
        const parseTokenWww = /^-?W(\d{2})$/;
        const parseTokenWwwD = /^-?W(\d{2})-?(\d{1})$/;
        const parseTokenHH = /^(\d{2}([.,]\d*)?)$/;
        const parseTokenHHMM = /^(\d{2}):?(\d{2}([.,]\d*)?)$/;
        const parseTokenHHMMSS = /^(\d{2}):?(\d{2}):?(\d{2}([.,]\d*)?)$/;
        const parseTokenTimezone = /([Z+-].*)$/;
        const parseTokenTimezoneZ = /^(Z)$/;
        const parseTokenTimezoneHH = /^([+-])(\d{2})$/;
        const parseTokenTimezoneHHMM = /^([+-])(\d{2}):?(\d{2})$/;

        function parse(argument, dirtyOptions) {
            if (isDate(argument)) {
                return new Date(argument.getTime())
            } else if (typeof argument !== "string") {
                return new Date(argument)
            }
            const options = dirtyOptions || {};
            let additionalDigits = options.additionalDigits;
            if (additionalDigits === null) {
                additionalDigits = DEFAULT_ADDITIONAL_DIGITS
            } else {
                additionalDigits = Number(additionalDigits)
            }
            const dateStrings = splitDateString(argument);
            const parseYearResult = parseYear(dateStrings.date, additionalDigits);
            const year = parseYearResult.year;
            const restDateString = parseYearResult.restDateString;
            const date = parseDate(restDateString, year);
            if (date) {
                const timestamp = date.getTime();
                let time = 0;
                let offset;
                if (dateStrings.time) {
                    time = parseTime(dateStrings.time)
                }
                if (dateStrings.timezone) {
                    offset = parseTimezone(dateStrings.timezone)
                } else {
                    offset = new Date(timestamp + time).getTimezoneOffset();
                    offset = new Date(timestamp + time + offset * MILLISECONDS_IN_MINUTE).getTimezoneOffset()
                }
                return new Date(timestamp + time + offset * MILLISECONDS_IN_MINUTE)
            } else {
                return new Date(argument)
            }
        }

        function splitDateString(dateString) {
            const dateStrings = {};
            const array = dateString.split(parseTokenDateTimeDelimeter);
            let timeString;
            if (parseTokenPlainTime.test(array[0])) {
                dateStrings.date = null;
                timeString = array[0]
            } else {
                dateStrings.date = array[0];
                timeString = array[1]
            }
            if (timeString) {
                const token = parseTokenTimezone.exec(timeString);
                if (token) {
                    dateStrings.time = timeString.replace(token[1], "");
                    dateStrings.timezone = token[1]
                } else {
                    dateStrings.time = timeString
                }
            }
            return dateStrings
        }

        function parseYear(dateString, additionalDigits) {
            const parseTokenYYY = parseTokensYYY[additionalDigits];
            const parseTokenYYYYY = parseTokensYYYYY[additionalDigits];
            let token;
            token = parseTokenYYYY.exec(dateString) || parseTokenYYYYY.exec(dateString);
            if (token) {
                const yearString = token[1];
                return {year: parseInt(yearString, 10), restDateString: dateString.slice(yearString.length)}
            }
            token = parseTokenYY.exec(dateString) || parseTokenYYY.exec(dateString);
            if (token) {
                const centuryString = token[1];
                return {year: parseInt(centuryString, 10) * 100, restDateString: dateString.slice(centuryString.length)}
            }
            return {year: null}
        }

        function parseDate(dateString, year) {
            if (year === null) {
                return null
            }
            let token;
            let date;
            let month;
            let week;
            if (dateString.length === 0) {
                date = new Date(0);
                date.setUTCFullYear(year);
                return date
            }
            token = parseTokenMM.exec(dateString);
            if (token) {
                date = new Date(0);
                month = parseInt(token[1], 10) - 1;
                date.setUTCFullYear(year, month);
                return date
            }
            token = parseTokenDDD.exec(dateString);
            if (token) {
                date = new Date(0);
                const dayOfYear = parseInt(token[1], 10);
                date.setUTCFullYear(year, 0, dayOfYear);
                return date
            }
            token = parseTokenMMDD.exec(dateString);
            if (token) {
                date = new Date(0);
                month = parseInt(token[1], 10) - 1;
                const day = parseInt(token[2], 10);
                date.setUTCFullYear(year, month, day);
                return date
            }
            token = parseTokenWww.exec(dateString);
            if (token) {
                week = parseInt(token[1], 10) - 1;
                return dayOfISOYear(year, week)
            }
            token = parseTokenWwwD.exec(dateString);
            if (token) {
                week = parseInt(token[1], 10) - 1;
                const dayOfWeek = parseInt(token[2], 10) - 1;
                return dayOfISOYear(year, week, dayOfWeek)
            }
            return null
        }

        function parseTime(timeString) {
            let token;
            let hours;
            let minutes;
            token = parseTokenHH.exec(timeString);
            if (token) {
                hours = parseFloat(token[1].replace(",", "."));
                return hours % 24 * MILLISECONDS_IN_HOUR
            }
            token = parseTokenHHMM.exec(timeString);
            if (token) {
                hours = parseInt(token[1], 10);
                minutes = parseFloat(token[2].replace(",", "."));
                return hours % 24 * MILLISECONDS_IN_HOUR + minutes * MILLISECONDS_IN_MINUTE
            }
            token = parseTokenHHMMSS.exec(timeString);
            if (token) {
                hours = parseInt(token[1], 10);
                minutes = parseInt(token[2], 10);
                const seconds = parseFloat(token[3].replace(",", "."));
                return hours % 24 * MILLISECONDS_IN_HOUR + minutes * MILLISECONDS_IN_MINUTE + seconds * 1e3
            }
            return null
        }

        function parseTimezone(timezoneString) {
            let token;
            let absoluteOffset;
            token = parseTokenTimezoneZ.exec(timezoneString);
            if (token) {
                return 0
            }
            token = parseTokenTimezoneHH.exec(timezoneString);
            if (token) {
                absoluteOffset = parseInt(token[2], 10) * 60;
                return token[1] === "+" ? -absoluteOffset : absoluteOffset
            }
            token = parseTokenTimezoneHHMM.exec(timezoneString);
            if (token) {
                absoluteOffset = parseInt(token[2], 10) * 60 + parseInt(token[3], 10);
                return token[1] === "+" ? -absoluteOffset : absoluteOffset
            }
            return 0
        }

        function dayOfISOYear(isoYear, week, day) {
            week = week || 0;
            day = day || 0;
            const date = new Date(0);
            date.setUTCFullYear(isoYear, 0, 4);
            const fourthOfJanuaryDay = date.getUTCDay() || 7;
            const diff = week * 7 + day + 1 - fourthOfJanuaryDay;
            date.setUTCDate(date.getUTCDate() + diff);
            return date
        }

        module.exports = parse
    }, function (module, exports) {
        function isDate(argument) {
            return argument instanceof Date
        }

        module.exports = isDate
    }, function (module, exports, __webpack_require__) {
        const addMilliseconds = __webpack_require__(5);
        const MILLISECONDS_IN_HOUR = 36e5;

        function addHours(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return addMilliseconds(dirtyDate, amount * MILLISECONDS_IN_HOUR)
        }

        module.exports = addHours
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function addMilliseconds(dirtyDate, dirtyAmount) {
            const timestamp = parse(dirtyDate).getTime();
            const amount = Number(dirtyAmount);
            return new Date(timestamp + amount)
        }

        module.exports = addMilliseconds
    }, function (module, exports, __webpack_require__) {
        const getISOYear = __webpack_require__(7);
        const setISOYear = __webpack_require__(10);

        function addISOYears(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return setISOYear(dirtyDate, getISOYear(dirtyDate) + amount)
        }

        module.exports = addISOYears
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const startOfISOWeek = __webpack_require__(8);

        function getISOYear(dirtyDate) {
            const date = parse(dirtyDate);
            const year = date.getFullYear();
            const fourthOfJanuaryOfNextYear = new Date(0);
            fourthOfJanuaryOfNextYear.setFullYear(year + 1, 0, 4);
            fourthOfJanuaryOfNextYear.setHours(0, 0, 0, 0);
            const startOfNextYear = startOfISOWeek(fourthOfJanuaryOfNextYear);
            const fourthOfJanuaryOfThisYear = new Date(0);
            fourthOfJanuaryOfThisYear.setFullYear(year, 0, 4);
            fourthOfJanuaryOfThisYear.setHours(0, 0, 0, 0);
            const startOfThisYear = startOfISOWeek(fourthOfJanuaryOfThisYear);
            if (date.getTime() >= startOfNextYear.getTime()) {
                return year + 1
            } else if (date.getTime() >= startOfThisYear.getTime()) {
                return year
            } else {
                return year - 1
            }
        }

        module.exports = getISOYear
    }, function (module, exports, __webpack_require__) {
        const startOfWeek = __webpack_require__(9);

        function startOfISOWeek(dirtyDate) {
            return startOfWeek(dirtyDate, {weekStartsOn: 1})
        }

        module.exports = startOfISOWeek
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function startOfWeek(dirtyDate, dirtyOptions) {
            const weekStartsOn = dirtyOptions ? Number(dirtyOptions.weekStartsOn) || 0 : 0;
            const date = parse(dirtyDate);
            const day = date.getDay();
            const diff = (day < weekStartsOn ? 7 : 0) + day - weekStartsOn;
            date.setDate(date.getDate() - diff);
            date.setHours(0, 0, 0, 0);
            return date
        }

        module.exports = startOfWeek
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const startOfISOYear = __webpack_require__(11);
        const differenceInCalendarDays = __webpack_require__(12);

        function setISOYear(dirtyDate, dirtyISOYear) {
            let date = parse(dirtyDate);
            const isoYear = Number(dirtyISOYear);
            const diff = differenceInCalendarDays(date, startOfISOYear(date));
            const fourthOfJanuary = new Date(0);
            fourthOfJanuary.setFullYear(isoYear, 0, 4);
            fourthOfJanuary.setHours(0, 0, 0, 0);
            date = startOfISOYear(fourthOfJanuary);
            date.setDate(date.getDate() + diff);
            return date
        }

        module.exports = setISOYear
    }, function (module, exports, __webpack_require__) {
        const getISOYear = __webpack_require__(7);
        const startOfISOWeek = __webpack_require__(8);

        function startOfISOYear(dirtyDate) {
            const year = getISOYear(dirtyDate);
            const fourthOfJanuary = new Date(0);
            fourthOfJanuary.setFullYear(year, 0, 4);
            fourthOfJanuary.setHours(0, 0, 0, 0);
            const date = startOfISOWeek(fourthOfJanuary);
            return date
        }

        module.exports = startOfISOYear
    }, function (module, exports, __webpack_require__) {
        const startOfDay = __webpack_require__(13);
        const MILLISECONDS_IN_MINUTE = 6e4;
        const MILLISECONDS_IN_DAY = 864e5;

        function differenceInCalendarDays(dirtyDateLeft, dirtyDateRight) {
            const startOfDayLeft = startOfDay(dirtyDateLeft);
            const startOfDayRight = startOfDay(dirtyDateRight);
            const timestampLeft = startOfDayLeft.getTime() - startOfDayLeft.getTimezoneOffset() * MILLISECONDS_IN_MINUTE;
            const timestampRight = startOfDayRight.getTime() - startOfDayRight.getTimezoneOffset() * MILLISECONDS_IN_MINUTE;
            return Math.round((timestampLeft - timestampRight) / MILLISECONDS_IN_DAY)
        }

        module.exports = differenceInCalendarDays
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function startOfDay(dirtyDate) {
            const date = parse(dirtyDate);
            date.setHours(0, 0, 0, 0);
            return date
        }

        module.exports = startOfDay
    }, function (module, exports, __webpack_require__) {
        const addMilliseconds = __webpack_require__(5);
        const MILLISECONDS_IN_MINUTE = 6e4;

        function addMinutes(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return addMilliseconds(dirtyDate, amount * MILLISECONDS_IN_MINUTE)
        }

        module.exports = addMinutes
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const getDaysInMonth = __webpack_require__(16);

        function addMonths(dirtyDate, dirtyAmount) {
            const date = parse(dirtyDate);
            const amount = Number(dirtyAmount);
            const desiredMonth = date.getMonth() + amount;
            const dateWithDesiredMonth = new Date(0);
            dateWithDesiredMonth.setFullYear(date.getFullYear(), desiredMonth, 1);
            dateWithDesiredMonth.setHours(0, 0, 0, 0);
            const daysInMonth = getDaysInMonth(dateWithDesiredMonth);
            date.setMonth(desiredMonth, Math.min(daysInMonth, date.getDate()));
            return date
        }

        module.exports = addMonths
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function getDaysInMonth(dirtyDate) {
            const date = parse(dirtyDate);
            const year = date.getFullYear();
            const monthIndex = date.getMonth();
            const lastDayOfMonth = new Date(0);
            lastDayOfMonth.setFullYear(year, monthIndex + 1, 0);
            lastDayOfMonth.setHours(0, 0, 0, 0);
            return lastDayOfMonth.getDate()
        }

        module.exports = getDaysInMonth
    }, function (module, exports, __webpack_require__) {
        const addMonths = __webpack_require__(15);

        function addQuarters(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            const months = amount * 3;
            return addMonths(dirtyDate, months)
        }

        module.exports = addQuarters
    }, function (module, exports, __webpack_require__) {
        const addMilliseconds = __webpack_require__(5);

        function addSeconds(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return addMilliseconds(dirtyDate, amount * 1e3)
        }

        module.exports = addSeconds
    }, function (module, exports, __webpack_require__) {
        const addDays = __webpack_require__(1);

        function addWeeks(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            const days = amount * 7;
            return addDays(dirtyDate, days)
        }

        module.exports = addWeeks
    }, function (module, exports, __webpack_require__) {
        const addMonths = __webpack_require__(15);

        function addYears(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return addMonths(dirtyDate, amount * 12)
        }

        module.exports = addYears
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function areRangesOverlapping(dirtyInitialRangeStartDate, dirtyInitialRangeEndDate, dirtyComparedRangeStartDate, dirtyComparedRangeEndDate) {
            const initialStartTime = parse(dirtyInitialRangeStartDate).getTime();
            const initialEndTime = parse(dirtyInitialRangeEndDate).getTime();
            const comparedStartTime = parse(dirtyComparedRangeStartDate).getTime();
            const comparedEndTime = parse(dirtyComparedRangeEndDate).getTime();
            if (initialStartTime > initialEndTime || comparedStartTime > comparedEndTime) {
                throw new Error("The start of the range cannot be after the end of the range")
            }
            return initialStartTime < comparedEndTime && comparedStartTime < initialEndTime
        }

        module.exports = areRangesOverlapping
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function closestIndexTo(dirtyDateToCompare, dirtyDatesArray) {
            if (!(dirtyDatesArray instanceof Array)) {
                throw new TypeError(toString.call(dirtyDatesArray) + " is not an instance of Array")
            }
            const dateToCompare = parse(dirtyDateToCompare);
            const timeToCompare = dateToCompare.getTime();
            let result;
            let minDistance;
            dirtyDatesArray.forEach(function (dirtyDate, index) {
                const currentDate = parse(dirtyDate);
                const distance = Math.abs(timeToCompare - currentDate.getTime());
                if (result === undefined || distance < minDistance) {
                    result = index;
                    minDistance = distance
                }
            });
            return result
        }

        module.exports = closestIndexTo
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function closestTo(dirtyDateToCompare, dirtyDatesArray) {
            if (!(dirtyDatesArray instanceof Array)) {
                throw new TypeError(toString.call(dirtyDatesArray) + " is not an instance of Array")
            }
            const dateToCompare = parse(dirtyDateToCompare);
            const timeToCompare = dateToCompare.getTime();
            let result;
            let minDistance;
            dirtyDatesArray.forEach(function (dirtyDate) {
                const currentDate = parse(dirtyDate);
                const distance = Math.abs(timeToCompare - currentDate.getTime());
                if (result === undefined || distance < minDistance) {
                    result = currentDate;
                    minDistance = distance
                }
            });
            return result
        }

        module.exports = closestTo
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function compareAsc(dirtyDateLeft, dirtyDateRight) {
            const dateLeft = parse(dirtyDateLeft);
            const timeLeft = dateLeft.getTime();
            const dateRight = parse(dirtyDateRight);
            const timeRight = dateRight.getTime();
            if (timeLeft < timeRight) {
                return -1
            } else if (timeLeft > timeRight) {
                return 1
            } else {
                return 0
            }
        }

        module.exports = compareAsc
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function compareDesc(dirtyDateLeft, dirtyDateRight) {
            const dateLeft = parse(dirtyDateLeft);
            const timeLeft = dateLeft.getTime();
            const dateRight = parse(dirtyDateRight);
            const timeRight = dateRight.getTime();
            if (timeLeft > timeRight) {
                return -1
            } else if (timeLeft < timeRight) {
                return 1
            } else {
                return 0
            }
        }

        module.exports = compareDesc
    }, function (module, exports, __webpack_require__) {
        const startOfISOWeek = __webpack_require__(8);
        const MILLISECONDS_IN_MINUTE = 6e4;
        const MILLISECONDS_IN_WEEK = 6048e5;

        function differenceInCalendarISOWeeks(dirtyDateLeft, dirtyDateRight) {
            const startOfISOWeekLeft = startOfISOWeek(dirtyDateLeft);
            const startOfISOWeekRight = startOfISOWeek(dirtyDateRight);
            const timestampLeft = startOfISOWeekLeft.getTime() - startOfISOWeekLeft.getTimezoneOffset() * MILLISECONDS_IN_MINUTE;
            const timestampRight = startOfISOWeekRight.getTime() - startOfISOWeekRight.getTimezoneOffset() * MILLISECONDS_IN_MINUTE;
            return Math.round((timestampLeft - timestampRight) / MILLISECONDS_IN_WEEK)
        }

        module.exports = differenceInCalendarISOWeeks
    }, function (module, exports, __webpack_require__) {
        const getISOYear = __webpack_require__(7);

        function differenceInCalendarISOYears(dirtyDateLeft, dirtyDateRight) {
            return getISOYear(dirtyDateLeft) - getISOYear(dirtyDateRight)
        }

        module.exports = differenceInCalendarISOYears
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function differenceInCalendarMonths(dirtyDateLeft, dirtyDateRight) {
            const dateLeft = parse(dirtyDateLeft);
            const dateRight = parse(dirtyDateRight);
            const yearDiff = dateLeft.getFullYear() - dateRight.getFullYear();
            const monthDiff = dateLeft.getMonth() - dateRight.getMonth();
            return yearDiff * 12 + monthDiff
        }

        module.exports = differenceInCalendarMonths
    }, function (module, exports, __webpack_require__) {
        const getQuarter = __webpack_require__(30);
        const parse = __webpack_require__(2);

        function differenceInCalendarQuarters(dirtyDateLeft, dirtyDateRight) {
            const dateLeft = parse(dirtyDateLeft);
            const dateRight = parse(dirtyDateRight);
            const yearDiff = dateLeft.getFullYear() - dateRight.getFullYear();
            const quarterDiff = getQuarter(dateLeft) - getQuarter(dateRight);
            return yearDiff * 4 + quarterDiff
        }

        module.exports = differenceInCalendarQuarters
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function getQuarter(dirtyDate) {
            const date = parse(dirtyDate);
            const quarter = Math.floor(date.getMonth() / 3) + 1;
            return quarter
        }

        module.exports = getQuarter
    }, function (module, exports, __webpack_require__) {
        const startOfWeek = __webpack_require__(9);
        const MILLISECONDS_IN_MINUTE = 6e4;
        const MILLISECONDS_IN_WEEK = 6048e5;

        function differenceInCalendarWeeks(dirtyDateLeft, dirtyDateRight, dirtyOptions) {
            const startOfWeekLeft = startOfWeek(dirtyDateLeft, dirtyOptions);
            const startOfWeekRight = startOfWeek(dirtyDateRight, dirtyOptions);
            const timestampLeft = startOfWeekLeft.getTime() - startOfWeekLeft.getTimezoneOffset() * MILLISECONDS_IN_MINUTE;
            const timestampRight = startOfWeekRight.getTime() - startOfWeekRight.getTimezoneOffset() * MILLISECONDS_IN_MINUTE;
            return Math.round((timestampLeft - timestampRight) / MILLISECONDS_IN_WEEK)
        }

        module.exports = differenceInCalendarWeeks
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function differenceInCalendarYears(dirtyDateLeft, dirtyDateRight) {
            const dateLeft = parse(dirtyDateLeft);
            const dateRight = parse(dirtyDateRight);
            return dateLeft.getFullYear() - dateRight.getFullYear()
        }

        module.exports = differenceInCalendarYears
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const differenceInCalendarDays = __webpack_require__(12);
        const compareAsc = __webpack_require__(24);

        function differenceInDays(dirtyDateLeft, dirtyDateRight) {
            const dateLeft = parse(dirtyDateLeft);
            const dateRight = parse(dirtyDateRight);
            const sign = compareAsc(dateLeft, dateRight);
            const difference = Math.abs(differenceInCalendarDays(dateLeft, dateRight));
            dateLeft.setDate(dateLeft.getDate() - sign * difference);
            const isLastDayNotFull = compareAsc(dateLeft, dateRight) === -sign;
            return sign * (difference - isLastDayNotFull)
        }

        module.exports = differenceInDays
    }, function (module, exports, __webpack_require__) {
        const differenceInMilliseconds = __webpack_require__(35);
        const MILLISECONDS_IN_HOUR = 36e5;

        function differenceInHours(dirtyDateLeft, dirtyDateRight) {
            const diff = differenceInMilliseconds(dirtyDateLeft, dirtyDateRight) / MILLISECONDS_IN_HOUR;
            return diff > 0 ? Math.floor(diff) : Math.ceil(diff)
        }

        module.exports = differenceInHours
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function differenceInMilliseconds(dirtyDateLeft, dirtyDateRight) {
            const dateLeft = parse(dirtyDateLeft);
            const dateRight = parse(dirtyDateRight);
            return dateLeft.getTime() - dateRight.getTime()
        }

        module.exports = differenceInMilliseconds
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const differenceInCalendarISOYears = __webpack_require__(27);
        const compareAsc = __webpack_require__(24);
        const subISOYears = __webpack_require__(37);

        function differenceInISOYears(dirtyDateLeft, dirtyDateRight) {
            let dateLeft = parse(dirtyDateLeft);
            const dateRight = parse(dirtyDateRight);
            const sign = compareAsc(dateLeft, dateRight);
            const difference = Math.abs(differenceInCalendarISOYears(dateLeft, dateRight));
            dateLeft = subISOYears(dateLeft, sign * difference);
            const isLastISOYearNotFull = compareAsc(dateLeft, dateRight) === -sign;
            return sign * (difference - isLastISOYearNotFull)
        }

        module.exports = differenceInISOYears
    }, function (module, exports, __webpack_require__) {
        const addISOYears = __webpack_require__(6);

        function subISOYears(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return addISOYears(dirtyDate, -amount)
        }

        module.exports = subISOYears
    }, function (module, exports, __webpack_require__) {
        const differenceInMilliseconds = __webpack_require__(35);
        const MILLISECONDS_IN_MINUTE = 6e4;

        function differenceInMinutes(dirtyDateLeft, dirtyDateRight) {
            const diff = differenceInMilliseconds(dirtyDateLeft, dirtyDateRight) / MILLISECONDS_IN_MINUTE;
            return diff > 0 ? Math.floor(diff) : Math.ceil(diff)
        }

        module.exports = differenceInMinutes
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const differenceInCalendarMonths = __webpack_require__(28);
        const compareAsc = __webpack_require__(24);

        function differenceInMonths(dirtyDateLeft, dirtyDateRight) {
            const dateLeft = parse(dirtyDateLeft);
            const dateRight = parse(dirtyDateRight);
            const sign = compareAsc(dateLeft, dateRight);
            const difference = Math.abs(differenceInCalendarMonths(dateLeft, dateRight));
            dateLeft.setMonth(dateLeft.getMonth() - sign * difference);
            const isLastMonthNotFull = compareAsc(dateLeft, dateRight) === -sign;
            return sign * (difference - isLastMonthNotFull)
        }

        module.exports = differenceInMonths
    }, function (module, exports, __webpack_require__) {
        const differenceInMonths = __webpack_require__(39);

        function differenceInQuarters(dirtyDateLeft, dirtyDateRight) {
            const diff = differenceInMonths(dirtyDateLeft, dirtyDateRight) / 3;
            return diff > 0 ? Math.floor(diff) : Math.ceil(diff)
        }

        module.exports = differenceInQuarters
    }, function (module, exports, __webpack_require__) {
        const differenceInMilliseconds = __webpack_require__(35);

        function differenceInSeconds(dirtyDateLeft, dirtyDateRight) {
            const diff = differenceInMilliseconds(dirtyDateLeft, dirtyDateRight) / 1e3;
            return diff > 0 ? Math.floor(diff) : Math.ceil(diff)
        }

        module.exports = differenceInSeconds
    }, function (module, exports, __webpack_require__) {
        const differenceInDays = __webpack_require__(33);

        function differenceInWeeks(dirtyDateLeft, dirtyDateRight) {
            const diff = differenceInDays(dirtyDateLeft, dirtyDateRight) / 7;
            return diff > 0 ? Math.floor(diff) : Math.ceil(diff)
        }

        module.exports = differenceInWeeks
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const differenceInCalendarYears = __webpack_require__(32);
        const compareAsc = __webpack_require__(24);

        function differenceInYears(dirtyDateLeft, dirtyDateRight) {
            const dateLeft = parse(dirtyDateLeft);
            const dateRight = parse(dirtyDateRight);
            const sign = compareAsc(dateLeft, dateRight);
            const difference = Math.abs(differenceInCalendarYears(dateLeft, dateRight));
            dateLeft.setFullYear(dateLeft.getFullYear() - sign * difference);
            const isLastYearNotFull = compareAsc(dateLeft, dateRight) === -sign;
            return sign * (difference - isLastYearNotFull)
        }

        module.exports = differenceInYears
    }, function (module, exports, __webpack_require__) {
        const compareDesc = __webpack_require__(25);
        const parse = __webpack_require__(2);
        const differenceInSeconds = __webpack_require__(41);
        const differenceInMonths = __webpack_require__(39);
        const enLocale = __webpack_require__(45);
        const MINUTES_IN_DAY = 1440;
        const MINUTES_IN_ALMOST_TWO_DAYS = 2520;
        const MINUTES_IN_MONTH = 43200;
        const MINUTES_IN_TWO_MONTHS = 86400;

        function distanceInWords(dirtyDateToCompare, dirtyDate, dirtyOptions) {
            const options = dirtyOptions || {};
            const comparison = compareDesc(dirtyDateToCompare, dirtyDate);
            const locale = options.locale;
            let localize = enLocale.distanceInWords.localize;
            if (locale && locale.distanceInWords && locale.distanceInWords.localize) {
                localize = locale.distanceInWords.localize
            }
            const localizeOptions = {addSuffix: Boolean(options.addSuffix), comparison: comparison};
            let dateLeft, dateRight;
            if (comparison > 0) {
                dateLeft = parse(dirtyDateToCompare);
                dateRight = parse(dirtyDate)
            } else {
                dateLeft = parse(dirtyDate);
                dateRight = parse(dirtyDateToCompare)
            }
            const seconds = differenceInSeconds(dateRight, dateLeft);
            const offset = dateRight.getTimezoneOffset() - dateLeft.getTimezoneOffset();
            const minutes = Math.round(seconds / 60) - offset;
            let months;
            if (minutes < 2) {
                if (options.includeSeconds) {
                    if (seconds < 5) {
                        return localize("lessThanXSeconds", 5, localizeOptions)
                    } else if (seconds < 10) {
                        return localize("lessThanXSeconds", 10, localizeOptions)
                    } else if (seconds < 20) {
                        return localize("lessThanXSeconds", 20, localizeOptions)
                    } else if (seconds < 40) {
                        return localize("halfAMinute", null, localizeOptions)
                    } else if (seconds < 60) {
                        return localize("lessThanXMinutes", 1, localizeOptions)
                    } else {
                        return localize("xMinutes", 1, localizeOptions)
                    }
                } else {
                    if (minutes === 0) {
                        return localize("lessThanXMinutes", 1, localizeOptions)
                    } else {
                        return localize("xMinutes", minutes, localizeOptions)
                    }
                }
            } else if (minutes < 45) {
                return localize("xMinutes", minutes, localizeOptions)
            } else if (minutes < 90) {
                return localize("aboutXHours", 1, localizeOptions)
            } else if (minutes < MINUTES_IN_DAY) {
                const hours = Math.round(minutes / 60);
                return localize("aboutXHours", hours, localizeOptions)
            } else if (minutes < MINUTES_IN_ALMOST_TWO_DAYS) {
                return localize("xDays", 1, localizeOptions)
            } else if (minutes < MINUTES_IN_MONTH) {
                const days = Math.round(minutes / MINUTES_IN_DAY);
                return localize("xDays", days, localizeOptions)
            } else if (minutes < MINUTES_IN_TWO_MONTHS) {
                months = Math.round(minutes / MINUTES_IN_MONTH);
                return localize("aboutXMonths", months, localizeOptions)
            }
            months = differenceInMonths(dateRight, dateLeft);
            if (months < 12) {
                const nearestMonth = Math.round(minutes / MINUTES_IN_MONTH);
                return localize("xMonths", nearestMonth, localizeOptions)
            } else {
                const monthsSinceStartOfYear = months % 12;
                const years = Math.floor(months / 12);
                if (monthsSinceStartOfYear < 3) {
                    return localize("aboutXYears", years, localizeOptions)
                } else if (monthsSinceStartOfYear < 9) {
                    return localize("overXYears", years, localizeOptions)
                } else {
                    return localize("almostXYears", years + 1, localizeOptions)
                }
            }
        }

        module.exports = distanceInWords
    }, function (module, exports, __webpack_require__) {
        const buildDistanceInWordsLocale = __webpack_require__(46);
        const buildFormatLocale = __webpack_require__(47);
        module.exports = {distanceInWords: buildDistanceInWordsLocale(), format: buildFormatLocale()}
    }, function (module, exports) {
        function buildDistanceInWordsLocale() {
            const distanceInWordsLocale = {
                lessThanXSeconds: {one: "less than a second", other: "less than {{count}} seconds"},
                xSeconds: {one: "1 second", other: "{{count}} seconds"},
                halfAMinute: "half a minute",
                lessThanXMinutes: {one: "less than a minute", other: "less than {{count}} minutes"},
                xMinutes: {
                    one: "1 minute", other: "{{count}} minutes"
                },
                aboutXHours: {one: "about 1 hour", other: "about {{count}} hours"},
                xHours: {one: "1 hour", other: "{{count}} hours"},
                xDays: {one: "1 day", other: "{{count}} days"},
                aboutXMonths: {one: "about 1 month", other: "about {{count}} months"},
                xMonths: {one: "1 month", other: "{{count}} months"},
                aboutXYears: {one: "about 1 year", other: "about {{count}} years"},
                xYears: {one: "1 year", other: "{{count}} years"},
                overXYears: {one: "over 1 year", other: "over {{count}} years"},
                almostXYears: {one: "almost 1 year", other: "almost {{count}} years"}
            };

            function localize(token, count, options) {
                options = options || {};
                let result;
                if (typeof distanceInWordsLocale[token] === "string") {
                    result = distanceInWordsLocale[token]
                } else if (count === 1) {
                    result = distanceInWordsLocale[token].one
                } else {
                    result = distanceInWordsLocale[token].other.replace("{{count}}", count)
                }
                if (options.addSuffix) {
                    if (options.comparison > 0) {
                        return "in " + result
                    } else {
                        return result + " ago"
                    }
                }
                return result
            }

            return {localize: localize}
        }

        module.exports = buildDistanceInWordsLocale
    }, function (module, exports, __webpack_require__) {
        const buildFormattingTokensRegExp = __webpack_require__(48);

        function buildFormatLocale() {
            const months3char = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            const monthsFull = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            const weekdays2char = ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"];
            const weekdays3char = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
            const weekdaysFull = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            const meridiemUppercase = ["AM", "PM"];
            const meridiemLowercase = ["am", "pm"];
            const meridiemFull = ["a.m.", "p.m."];
            const formatters = {
                MMM: function (date) {
                    return months3char[date.getMonth()]
                }, MMMM: function (date) {
                    return monthsFull[date.getMonth()]
                }, dd: function (date) {
                    return weekdays2char[date.getDay()]
                }, ddd: function (date) {
                    return weekdays3char[date.getDay()]
                }, dddd: function (date) {
                    return weekdaysFull[date.getDay()]
                }, A: function (date) {
                    return date.getHours() / 12 >= 1 ? meridiemUppercase[1] : meridiemUppercase[0]
                }, a: function (date) {
                    return date.getHours() / 12 >= 1 ? meridiemLowercase[1] : meridiemLowercase[0]
                }, aa: function (date) {
                    return date.getHours() / 12 >= 1 ? meridiemFull[1] : meridiemFull[0]
                }
            };
            const ordinalFormatters = ["M", "D", "DDD", "d", "Q", "W"];
            ordinalFormatters.forEach(function (formatterToken) {
                formatters[formatterToken + "o"] = function (date, formatters) {
                    return ordinal(formatters[formatterToken](date))
                }
            });
            return {formatters: formatters, formattingTokensRegExp: buildFormattingTokensRegExp(formatters)}
        }

        function ordinal(number) {
            const rem100 = number % 100;
            if (rem100 > 20 || rem100 < 10) {
                switch (rem100 % 10) {
                    case 1:
                        return number + "st";
                    case 2:
                        return number + "nd";
                    case 3:
                        return number + "rd"
                }
            }
            return number + "th"
        }

        module.exports = buildFormatLocale
    }, function (module, exports) {
        const commonFormatterKeys = ["M", "MM", "Q", "D", "DD", "DDD", "DDDD", "d", "E", "W", "WW", "YY", "YYYY", "GG", "GGGG", "H", "HH", "h", "hh", "m", "mm", "s", "ss", "S", "SS", "SSS", "Z", "ZZ", "X", "x"];

        function buildFormattingTokensRegExp(formatters) {
            const formatterKeys = [];
            for (let key in formatters) {
                if (formatters.hasOwnProperty(key)) {
                    formatterKeys.push(key)
                }
            }
            const formattingTokens = commonFormatterKeys.concat(formatterKeys).sort().reverse();
            const formattingTokensRegExp = new RegExp("(\\[[^\\[]*\\])|(\\\\)?" + "(" + formattingTokens.join("|") + "|.)", "g");
            return formattingTokensRegExp
        }

        module.exports = buildFormattingTokensRegExp
    }, function (module, exports, __webpack_require__) {
        const compareDesc = __webpack_require__(25);
        const parse = __webpack_require__(2);
        const differenceInSeconds = __webpack_require__(41);
        const enLocale = __webpack_require__(45);
        const MINUTES_IN_DAY = 1440;
        const MINUTES_IN_MONTH = 43200;
        const MINUTES_IN_YEAR = 525600;

        function distanceInWordsStrict(dirtyDateToCompare, dirtyDate, dirtyOptions) {
            const options = dirtyOptions || {};
            const comparison = compareDesc(dirtyDateToCompare, dirtyDate);
            const locale = options.locale;
            let localize = enLocale.distanceInWords.localize;
            if (locale && locale.distanceInWords && locale.distanceInWords.localize) {
                localize = locale.distanceInWords.localize
            }
            const localizeOptions = {addSuffix: Boolean(options.addSuffix), comparison: comparison};
            let dateLeft, dateRight;
            if (comparison > 0) {
                dateLeft = parse(dirtyDateToCompare);
                dateRight = parse(dirtyDate)
            } else {
                dateLeft = parse(dirtyDate);
                dateRight = parse(dirtyDateToCompare)
            }
            let unit;
            const mathPartial = Math[options.partialMethod ? String(options.partialMethod) : "floor"];
            const seconds = differenceInSeconds(dateRight, dateLeft);
            const offset = dateRight.getTimezoneOffset() - dateLeft.getTimezoneOffset();
            const minutes = mathPartial(seconds / 60) - offset;
            let hours, days, months, years;
            if (options.unit) {
                unit = String(options.unit)
            } else {
                if (minutes < 1) {
                    unit = "s"
                } else if (minutes < 60) {
                    unit = "m"
                } else if (minutes < MINUTES_IN_DAY) {
                    unit = "h"
                } else if (minutes < MINUTES_IN_MONTH) {
                    unit = "d"
                } else if (minutes < MINUTES_IN_YEAR) {
                    unit = "M"
                } else {
                    unit = "Y"
                }
            }
            if (unit === "s") {
                return localize("xSeconds", seconds, localizeOptions)
            } else if (unit === "m") {
                return localize("xMinutes", minutes, localizeOptions)
            } else if (unit === "h") {
                hours = mathPartial(minutes / 60);
                return localize("xHours", hours, localizeOptions)
            } else if (unit === "d") {
                days = mathPartial(minutes / MINUTES_IN_DAY);
                return localize("xDays", days, localizeOptions)
            } else if (unit === "M") {
                months = mathPartial(minutes / MINUTES_IN_MONTH);
                return localize("xMonths", months, localizeOptions)
            } else if (unit === "Y") {
                years = mathPartial(minutes / MINUTES_IN_YEAR);
                return localize("xYears", years, localizeOptions)
            }
            throw new Error("Unknown unit: " + unit)
        }

        module.exports = distanceInWordsStrict
    }, function (module, exports, __webpack_require__) {
        const distanceInWords = __webpack_require__(44);

        function distanceInWordsToNow(dirtyDate, dirtyOptions) {
            return distanceInWords(Date.now(), dirtyDate, dirtyOptions)
        }

        module.exports = distanceInWordsToNow
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function eachDay(dirtyStartDate, dirtyEndDate) {
            const startDate = parse(dirtyStartDate);
            const endDate = parse(dirtyEndDate);
            const endTime = endDate.getTime();
            if (startDate.getTime() > endTime) {
                throw new Error("The first date cannot be after the second date")
            }
            const dates = [];
            const currentDate = startDate;
            currentDate.setHours(0, 0, 0, 0);
            while (currentDate.getTime() <= endTime) {
                dates.push(parse(currentDate));
                currentDate.setDate(currentDate.getDate() + 1)
            }
            return dates
        }

        module.exports = eachDay
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function endOfDay(dirtyDate) {
            const date = parse(dirtyDate);
            date.setHours(23, 59, 59, 999);
            return date
        }

        module.exports = endOfDay
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function endOfHour(dirtyDate) {
            const date = parse(dirtyDate);
            date.setMinutes(59, 59, 999);
            return date
        }

        module.exports = endOfHour
    }, function (module, exports, __webpack_require__) {
        const endOfWeek = __webpack_require__(55);

        function endOfISOWeek(dirtyDate) {
            return endOfWeek(dirtyDate, {weekStartsOn: 1})
        }

        module.exports = endOfISOWeek
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function endOfWeek(dirtyDate, dirtyOptions) {
            const weekStartsOn = dirtyOptions ? Number(dirtyOptions.weekStartsOn) || 0 : 0;
            const date = parse(dirtyDate);
            const day = date.getDay();
            const diff = (day < weekStartsOn ? -7 : 0) + 6 - (day - weekStartsOn);
            date.setDate(date.getDate() + diff);
            date.setHours(23, 59, 59, 999);
            return date
        }

        module.exports = endOfWeek
    }, function (module, exports, __webpack_require__) {
        const getISOYear = __webpack_require__(7);
        const startOfISOWeek = __webpack_require__(8);

        function endOfISOYear(dirtyDate) {
            const year = getISOYear(dirtyDate);
            const fourthOfJanuaryOfNextYear = new Date(0);
            fourthOfJanuaryOfNextYear.setFullYear(year + 1, 0, 4);
            fourthOfJanuaryOfNextYear.setHours(0, 0, 0, 0);
            const date = startOfISOWeek(fourthOfJanuaryOfNextYear);
            date.setMilliseconds(date.getMilliseconds() - 1);
            return date
        }

        module.exports = endOfISOYear
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function endOfMinute(dirtyDate) {
            const date = parse(dirtyDate);
            date.setSeconds(59, 999);
            return date
        }

        module.exports = endOfMinute
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function endOfMonth(dirtyDate) {
            const date = parse(dirtyDate);
            const month = date.getMonth();
            date.setFullYear(date.getFullYear(), month + 1, 0);
            date.setHours(23, 59, 59, 999);
            return date
        }

        module.exports = endOfMonth
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function endOfQuarter(dirtyDate) {
            const date = parse(dirtyDate);
            const currentMonth = date.getMonth();
            const month = currentMonth - currentMonth % 3 + 3;
            date.setMonth(month, 0);
            date.setHours(23, 59, 59, 999);
            return date
        }

        module.exports = endOfQuarter
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function endOfSecond(dirtyDate) {
            const date = parse(dirtyDate);
            date.setMilliseconds(999);
            return date
        }

        module.exports = endOfSecond
    }, function (module, exports, __webpack_require__) {
        const endOfDay = __webpack_require__(52);

        function endOfToday() {
            return endOfDay(new Date)
        }

        module.exports = endOfToday
    }, function (module, exports) {
        function endOfTomorrow() {
            const now = new Date;
            const year = now.getFullYear();
            const month = now.getMonth();
            const day = now.getDate();
            const date = new Date(0);
            date.setFullYear(year, month, day + 1);
            date.setHours(23, 59, 59, 999);
            return date
        }

        module.exports = endOfTomorrow
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function endOfYear(dirtyDate) {
            const date = parse(dirtyDate);
            const year = date.getFullYear();
            date.setFullYear(year + 1, 0, 0);
            date.setHours(23, 59, 59, 999);
            return date
        }

        module.exports = endOfYear
    }, function (module, exports) {
        function endOfYesterday() {
            const now = new Date;
            const year = now.getFullYear();
            const month = now.getMonth();
            const day = now.getDate();
            const date = new Date(0);
            date.setFullYear(year, month, day - 1);
            date.setHours(23, 59, 59, 999);
            return date
        }

        module.exports = endOfYesterday
    }, function (module, exports, __webpack_require__) {
        const getDayOfYear = __webpack_require__(66);
        const getISOWeek = __webpack_require__(68);
        const getISOYear = __webpack_require__(7);
        const parse = __webpack_require__(2);
        const isValid = __webpack_require__(69);
        const enLocale = __webpack_require__(45);

        function format(dirtyDate, dirtyFormatStr, dirtyOptions) {
            const formatStr = dirtyFormatStr ? String(dirtyFormatStr) : "YYYY-MM-DDTHH:mm:ss.SSSZ";
            const options = dirtyOptions || {};
            const locale = options.locale;
            let localeFormatters = enLocale.format.formatters;
            let formattingTokensRegExp = enLocale.format.formattingTokensRegExp;
            if (locale && locale.format && locale.format.formatters) {
                localeFormatters = locale.format.formatters;
                if (locale.format.formattingTokensRegExp) {
                    formattingTokensRegExp = locale.format.formattingTokensRegExp
                }
            }
            const date = parse(dirtyDate);
            if (!isValid(date)) {
                return "Invalid Date"
            }
            const formatFn = buildFormatFn(formatStr, localeFormatters, formattingTokensRegExp);
            return formatFn(date)
        }

        const formatters = {
            M: function (date) {
                return date.getMonth() + 1
            }, MM: function (date) {
                return addLeadingZeros(date.getMonth() + 1, 2)
            }, Q: function (date) {
                return Math.ceil((date.getMonth() + 1) / 3)
            }, D: function (date) {
                return date.getDate()
            }, DD: function (date) {
                return addLeadingZeros(date.getDate(), 2)
            }, DDD: function (date) {
                return getDayOfYear(date)
            }, DDDD: function (date) {
                return addLeadingZeros(getDayOfYear(date), 3)
            }, d: function (date) {
                return date.getDay()
            }, E: function (date) {
                return date.getDay() || 7
            }, W: function (date) {
                return getISOWeek(date)
            }, WW: function (date) {
                return addLeadingZeros(getISOWeek(date), 2)
            }, YY: function (date) {
                return addLeadingZeros(date.getFullYear(), 4).substr(2)
            }, YYYY: function (date) {
                return addLeadingZeros(date.getFullYear(), 4)
            }, GG: function (date) {
                return String(getISOYear(date)).substr(2)
            }, GGGG: function (date) {
                return getISOYear(date)
            }, H: function (date) {
                return date.getHours()
            }, HH: function (date) {
                return addLeadingZeros(date.getHours(), 2)
            }, h: function (date) {
                const hours = date.getHours();
                if (hours === 0) {
                    return 12
                } else if (hours > 12) {
                    return hours % 12
                } else {
                    return hours
                }
            }, hh: function (date) {
                return addLeadingZeros(formatters["h"](date), 2)
            }, m: function (date) {
                return date.getMinutes()
            }, mm: function (date) {
                return addLeadingZeros(date.getMinutes(), 2)
            }, s: function (date) {
                return date.getSeconds()
            }, ss: function (date) {
                return addLeadingZeros(date.getSeconds(), 2)
            }, S: function (date) {
                return Math.floor(date.getMilliseconds() / 100)
            }, SS: function (date) {
                return addLeadingZeros(Math.floor(date.getMilliseconds() / 10), 2)
            }, SSS: function (date) {
                return addLeadingZeros(date.getMilliseconds(), 3)
            }, Z: function (date) {
                return formatTimezone(date.getTimezoneOffset(), ":")
            }, ZZ: function (date) {
                return formatTimezone(date.getTimezoneOffset())
            }, X: function (date) {
                return Math.floor(date.getTime() / 1e3)
            }, x: function (date) {
                return date.getTime()
            }
        };

        function buildFormatFn(formatStr, localeFormatters, formattingTokensRegExp) {
            const array = formatStr.match(formattingTokensRegExp);
            const length = array.length;
            let i;
            let formatter;
            for (i = 0; i < length; i++) {
                formatter = localeFormatters[array[i]] || formatters[array[i]];
                if (formatter) {
                    array[i] = formatter
                } else {
                    array[i] = removeFormattingTokens(array[i])
                }
            }
            return function (date) {
                let output = "";
                for (let i = 0; i < length; i++) {
                    if (array[i] instanceof Function) {
                        output += array[i](date, formatters)
                    } else {
                        output += array[i]
                    }
                }
                return output
            }
        }

        function removeFormattingTokens(input) {
            if (input.match(/\[[\s\S]/)) {
                return input.replace(/^\[|]$/g, "")
            }
            return input.replace(/\\/g, "")
        }

        function formatTimezone(offset, delimeter) {
            delimeter = delimeter || "";
            const sign = offset > 0 ? "-" : "+";
            const absOffset = Math.abs(offset);
            const hours = Math.floor(absOffset / 60);
            const minutes = absOffset % 60;
            return sign + addLeadingZeros(hours, 2) + delimeter + addLeadingZeros(minutes, 2)
        }

        function addLeadingZeros(number, targetLength) {
            let output = Math.abs(number).toString();
            while (output.length < targetLength) {
                output = "0" + output
            }
            return output
        }

        module.exports = format
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const startOfYear = __webpack_require__(67);
        const differenceInCalendarDays = __webpack_require__(12);

        function getDayOfYear(dirtyDate) {
            const date = parse(dirtyDate);
            const diff = differenceInCalendarDays(date, startOfYear(date));
            const dayOfYear = diff + 1;
            return dayOfYear
        }

        module.exports = getDayOfYear
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function startOfYear(dirtyDate) {
            const cleanDate = parse(dirtyDate);
            const date = new Date(0);
            date.setFullYear(cleanDate.getFullYear(), 0, 1);
            date.setHours(0, 0, 0, 0);
            return date
        }

        module.exports = startOfYear
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const startOfISOWeek = __webpack_require__(8);
        const startOfISOYear = __webpack_require__(11);
        const MILLISECONDS_IN_WEEK = 6048e5;

        function getISOWeek(dirtyDate) {
            const date = parse(dirtyDate);
            const diff = startOfISOWeek(date).getTime() - startOfISOYear(date).getTime();
            return Math.round(diff / MILLISECONDS_IN_WEEK) + 1
        }

        module.exports = getISOWeek
    }, function (module, exports, __webpack_require__) {
        const isDate = __webpack_require__(3);

        function isValid(dirtyDate) {
            if (isDate(dirtyDate)) {
                return !isNaN(dirtyDate)
            } else {
                throw new TypeError(toString.call(dirtyDate) + " is not an instance of Date")
            }
        }

        module.exports = isValid
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function getDate(dirtyDate) {
            const date = parse(dirtyDate);
            const dayOfMonth = date.getDate();
            return dayOfMonth
        }

        module.exports = getDate
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function getDay(dirtyDate) {
            const date = parse(dirtyDate);
            const day = date.getDay();
            return day
        }

        module.exports = getDay
    }, function (module, exports, __webpack_require__) {
        const isLeapYear = __webpack_require__(73);

        function getDaysInYear(dirtyDate) {
            return isLeapYear(dirtyDate) ? 366 : 365
        }

        module.exports = getDaysInYear
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isLeapYear(dirtyDate) {
            const date = parse(dirtyDate);
            const year = date.getFullYear();
            return year % 400 === 0 || year % 4 === 0 && year % 100 !== 0
        }

        module.exports = isLeapYear
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function getHours(dirtyDate) {
            const date = parse(dirtyDate);
            const hours = date.getHours();
            return hours
        }

        module.exports = getHours
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function getISODay(dirtyDate) {
            const date = parse(dirtyDate);
            let day = date.getDay();
            if (day === 0) {
                day = 7
            }
            return day
        }

        module.exports = getISODay
    }, function (module, exports, __webpack_require__) {
        const startOfISOYear = __webpack_require__(11);
        const addWeeks = __webpack_require__(19);
        const MILLISECONDS_IN_WEEK = 6048e5;

        function getISOWeeksInYear(dirtyDate) {
            const thisYear = startOfISOYear(dirtyDate);
            const nextYear = startOfISOYear(addWeeks(thisYear, 60));
            const diff = nextYear.valueOf() - thisYear.valueOf();
            return Math.round(diff / MILLISECONDS_IN_WEEK)
        }

        module.exports = getISOWeeksInYear
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function getMilliseconds(dirtyDate) {
            const date = parse(dirtyDate);
            const milliseconds = date.getMilliseconds();
            return milliseconds
        }

        module.exports = getMilliseconds
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function getMinutes(dirtyDate) {
            const date = parse(dirtyDate);
            const minutes = date.getMinutes();
            return minutes
        }

        module.exports = getMinutes
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function getMonth(dirtyDate) {
            const date = parse(dirtyDate);
            const month = date.getMonth();
            return month
        }

        module.exports = getMonth
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const MILLISECONDS_IN_DAY = 24 * 60 * 60 * 1e3;

        function getOverlappingDaysInRanges(dirtyInitialRangeStartDate, dirtyInitialRangeEndDate, dirtyComparedRangeStartDate, dirtyComparedRangeEndDate) {
            const initialStartTime = parse(dirtyInitialRangeStartDate).getTime();
            const initialEndTime = parse(dirtyInitialRangeEndDate).getTime();
            const comparedStartTime = parse(dirtyComparedRangeStartDate).getTime();
            const comparedEndTime = parse(dirtyComparedRangeEndDate).getTime();
            if (initialStartTime > initialEndTime || comparedStartTime > comparedEndTime) {
                throw new Error("The start of the range cannot be after the end of the range")
            }
            const isOverlapping = initialStartTime < comparedEndTime && comparedStartTime < initialEndTime;
            if (!isOverlapping) {
                return 0
            }
            const overlapStartDate = comparedStartTime < initialStartTime ? initialStartTime : comparedStartTime;
            const overlapEndDate = comparedEndTime > initialEndTime ? initialEndTime : comparedEndTime;
            const differenceInMs = overlapEndDate - overlapStartDate;
            return Math.ceil(differenceInMs / MILLISECONDS_IN_DAY)
        }

        module.exports = getOverlappingDaysInRanges
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function getSeconds(dirtyDate) {
            const date = parse(dirtyDate);
            const seconds = date.getSeconds();
            return seconds
        }

        module.exports = getSeconds
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function getTime(dirtyDate) {
            const date = parse(dirtyDate);
            const timestamp = date.getTime();
            return timestamp
        }

        module.exports = getTime
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function getYear(dirtyDate) {
            const date = parse(dirtyDate);
            const year = date.getFullYear();
            return year
        }

        module.exports = getYear
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isAfter(dirtyDate, dirtyDateToCompare) {
            const date = parse(dirtyDate);
            const dateToCompare = parse(dirtyDateToCompare);
            return date.getTime() > dateToCompare.getTime()
        }

        module.exports = isAfter
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isBefore(dirtyDate, dirtyDateToCompare) {
            const date = parse(dirtyDate);
            const dateToCompare = parse(dirtyDateToCompare);
            return date.getTime() < dateToCompare.getTime()
        }

        module.exports = isBefore
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isEqual(dirtyLeftDate, dirtyRightDate) {
            const dateLeft = parse(dirtyLeftDate);
            const dateRight = parse(dirtyRightDate);
            return dateLeft.getTime() === dateRight.getTime()
        }

        module.exports = isEqual
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isFirstDayOfMonth(dirtyDate) {
            return parse(dirtyDate).getDate() === 1
        }

        module.exports = isFirstDayOfMonth
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isFriday(dirtyDate) {
            return parse(dirtyDate).getDay() === 5
        }

        module.exports = isFriday
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isFuture(dirtyDate) {
            return parse(dirtyDate).getTime() > (new Date).getTime()
        }

        module.exports = isFuture
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const endOfDay = __webpack_require__(52);
        const endOfMonth = __webpack_require__(58);

        function isLastDayOfMonth(dirtyDate) {
            const date = parse(dirtyDate);
            return endOfDay(date).getTime() === endOfMonth(date).getTime()
        }

        module.exports = isLastDayOfMonth
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isMonday(dirtyDate) {
            return parse(dirtyDate).getDay() === 1
        }

        module.exports = isMonday
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isPast(dirtyDate) {
            return parse(dirtyDate).getTime() < (new Date).getTime()
        }

        module.exports = isPast
    }, function (module, exports, __webpack_require__) {
        const startOfDay = __webpack_require__(13);

        function isSameDay(dirtyDateLeft, dirtyDateRight) {
            const dateLeftStartOfDay = startOfDay(dirtyDateLeft);
            const dateRightStartOfDay = startOfDay(dirtyDateRight);
            return dateLeftStartOfDay.getTime() === dateRightStartOfDay.getTime()
        }

        module.exports = isSameDay
    }, function (module, exports, __webpack_require__) {
        const startOfHour = __webpack_require__(95);

        function isSameHour(dirtyDateLeft, dirtyDateRight) {
            const dateLeftStartOfHour = startOfHour(dirtyDateLeft);
            const dateRightStartOfHour = startOfHour(dirtyDateRight);
            return dateLeftStartOfHour.getTime() === dateRightStartOfHour.getTime()
        }

        module.exports = isSameHour
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function startOfHour(dirtyDate) {
            const date = parse(dirtyDate);
            date.setMinutes(0, 0, 0);
            return date
        }

        module.exports = startOfHour
    }, function (module, exports, __webpack_require__) {
        const isSameWeek = __webpack_require__(97);

        function isSameISOWeek(dirtyDateLeft, dirtyDateRight) {
            return isSameWeek(dirtyDateLeft, dirtyDateRight, {weekStartsOn: 1})
        }

        module.exports = isSameISOWeek
    }, function (module, exports, __webpack_require__) {
        const startOfWeek = __webpack_require__(9);

        function isSameWeek(dirtyDateLeft, dirtyDateRight, dirtyOptions) {
            const dateLeftStartOfWeek = startOfWeek(dirtyDateLeft, dirtyOptions);
            const dateRightStartOfWeek = startOfWeek(dirtyDateRight, dirtyOptions);
            return dateLeftStartOfWeek.getTime() === dateRightStartOfWeek.getTime()
        }

        module.exports = isSameWeek
    }, function (module, exports, __webpack_require__) {
        const startOfISOYear = __webpack_require__(11);

        function isSameISOYear(dirtyDateLeft, dirtyDateRight) {
            const dateLeftStartOfYear = startOfISOYear(dirtyDateLeft);
            const dateRightStartOfYear = startOfISOYear(dirtyDateRight);
            return dateLeftStartOfYear.getTime() === dateRightStartOfYear.getTime()
        }

        module.exports = isSameISOYear
    }, function (module, exports, __webpack_require__) {
        const startOfMinute = __webpack_require__(100);

        function isSameMinute(dirtyDateLeft, dirtyDateRight) {
            const dateLeftStartOfMinute = startOfMinute(dirtyDateLeft);
            const dateRightStartOfMinute = startOfMinute(dirtyDateRight);
            return dateLeftStartOfMinute.getTime() === dateRightStartOfMinute.getTime()
        }

        module.exports = isSameMinute
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function startOfMinute(dirtyDate) {
            const date = parse(dirtyDate);
            date.setSeconds(0, 0);
            return date
        }

        module.exports = startOfMinute
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isSameMonth(dirtyDateLeft, dirtyDateRight) {
            const dateLeft = parse(dirtyDateLeft);
            const dateRight = parse(dirtyDateRight);
            return dateLeft.getFullYear() === dateRight.getFullYear() && dateLeft.getMonth() === dateRight.getMonth()
        }

        module.exports = isSameMonth
    }, function (module, exports, __webpack_require__) {
        const startOfQuarter = __webpack_require__(103);

        function isSameQuarter(dirtyDateLeft, dirtyDateRight) {
            const dateLeftStartOfQuarter = startOfQuarter(dirtyDateLeft);
            const dateRightStartOfQuarter = startOfQuarter(dirtyDateRight);
            return dateLeftStartOfQuarter.getTime() === dateRightStartOfQuarter.getTime()
        }

        module.exports = isSameQuarter
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function startOfQuarter(dirtyDate) {
            const date = parse(dirtyDate);
            const currentMonth = date.getMonth();
            const month = currentMonth - currentMonth % 3;
            date.setMonth(month, 1);
            date.setHours(0, 0, 0, 0);
            return date
        }

        module.exports = startOfQuarter
    }, function (module, exports, __webpack_require__) {
        const startOfSecond = __webpack_require__(105);

        function isSameSecond(dirtyDateLeft, dirtyDateRight) {
            const dateLeftStartOfSecond = startOfSecond(dirtyDateLeft);
            const dateRightStartOfSecond = startOfSecond(dirtyDateRight);
            return dateLeftStartOfSecond.getTime() === dateRightStartOfSecond.getTime()
        }

        module.exports = isSameSecond
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function startOfSecond(dirtyDate) {
            const date = parse(dirtyDate);
            date.setMilliseconds(0);
            return date
        }

        module.exports = startOfSecond
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isSameYear(dirtyDateLeft, dirtyDateRight) {
            const dateLeft = parse(dirtyDateLeft);
            const dateRight = parse(dirtyDateRight);
            return dateLeft.getFullYear() === dateRight.getFullYear()
        }

        module.exports = isSameYear
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isSaturday(dirtyDate) {
            return parse(dirtyDate).getDay() === 6
        }

        module.exports = isSaturday
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isSunday(dirtyDate) {
            return parse(dirtyDate).getDay() === 0
        }

        module.exports = isSunday
    }, function (module, exports, __webpack_require__) {
        const isSameHour = __webpack_require__(94);

        function isThisHour(dirtyDate) {
            return isSameHour(new Date, dirtyDate)
        }

        module.exports = isThisHour
    }, function (module, exports, __webpack_require__) {
        const isSameISOWeek = __webpack_require__(96);

        function isThisISOWeek(dirtyDate) {
            return isSameISOWeek(new Date, dirtyDate)
        }

        module.exports = isThisISOWeek
    }, function (module, exports, __webpack_require__) {
        const isSameISOYear = __webpack_require__(98);

        function isThisISOYear(dirtyDate) {
            return isSameISOYear(new Date, dirtyDate)
        }

        module.exports = isThisISOYear
    }, function (module, exports, __webpack_require__) {
        const isSameMinute = __webpack_require__(99);

        function isThisMinute(dirtyDate) {
            return isSameMinute(new Date, dirtyDate)
        }

        module.exports = isThisMinute
    }, function (module, exports, __webpack_require__) {
        const isSameMonth = __webpack_require__(101);

        function isThisMonth(dirtyDate) {
            return isSameMonth(new Date, dirtyDate)
        }

        module.exports = isThisMonth
    }, function (module, exports, __webpack_require__) {
        const isSameQuarter = __webpack_require__(102);

        function isThisQuarter(dirtyDate) {
            return isSameQuarter(new Date, dirtyDate)
        }

        module.exports = isThisQuarter
    }, function (module, exports, __webpack_require__) {
        const isSameSecond = __webpack_require__(104);

        function isThisSecond(dirtyDate) {
            return isSameSecond(new Date, dirtyDate)
        }

        module.exports = isThisSecond
    }, function (module, exports, __webpack_require__) {
        const isSameWeek = __webpack_require__(97);

        function isThisWeek(dirtyDate, dirtyOptions) {
            return isSameWeek(new Date, dirtyDate, dirtyOptions)
        }

        module.exports = isThisWeek
    }, function (module, exports, __webpack_require__) {
        const isSameYear = __webpack_require__(106);

        function isThisYear(dirtyDate) {
            return isSameYear(new Date, dirtyDate)
        }

        module.exports = isThisYear
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isThursday(dirtyDate) {
            return parse(dirtyDate).getDay() === 4
        }

        module.exports = isThursday
    }, function (module, exports, __webpack_require__) {
        const startOfDay = __webpack_require__(13);

        function isToday(dirtyDate) {
            return startOfDay(dirtyDate).getTime() === startOfDay(new Date).getTime()
        }

        module.exports = isToday
    }, function (module, exports, __webpack_require__) {
        const startOfDay = __webpack_require__(13);

        function isTomorrow(dirtyDate) {
            const tomorrow = new Date;
            tomorrow.setDate(tomorrow.getDate() + 1);
            return startOfDay(dirtyDate).getTime() === startOfDay(tomorrow).getTime()
        }

        module.exports = isTomorrow
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isTuesday(dirtyDate) {
            return parse(dirtyDate).getDay() === 2
        }

        module.exports = isTuesday
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isWednesday(dirtyDate) {
            return parse(dirtyDate).getDay() === 3
        }

        module.exports = isWednesday
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isWeekend(dirtyDate) {
            const date = parse(dirtyDate);
            const day = date.getDay();
            return day === 0 || day === 6
        }

        module.exports = isWeekend
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function isWithinRange(dirtyDate, dirtyStartDate, dirtyEndDate) {
            const time = parse(dirtyDate).getTime();
            const startTime = parse(dirtyStartDate).getTime();
            const endTime = parse(dirtyEndDate).getTime();
            if (startTime > endTime) {
                throw new Error("The start of the range cannot be after the end of the range")
            }
            return time >= startTime && time <= endTime
        }

        module.exports = isWithinRange
    }, function (module, exports, __webpack_require__) {
        const startOfDay = __webpack_require__(13);

        function isYesterday(dirtyDate) {
            const yesterday = new Date;
            yesterday.setDate(yesterday.getDate() - 1);
            return startOfDay(dirtyDate).getTime() === startOfDay(yesterday).getTime()
        }

        module.exports = isYesterday
    }, function (module, exports, __webpack_require__) {
        const lastDayOfWeek = __webpack_require__(127);

        function lastDayOfISOWeek(dirtyDate) {
            return lastDayOfWeek(dirtyDate, {weekStartsOn: 1})
        }

        module.exports = lastDayOfISOWeek
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function lastDayOfWeek(dirtyDate, dirtyOptions) {
            const weekStartsOn = dirtyOptions ? Number(dirtyOptions.weekStartsOn) || 0 : 0;
            const date = parse(dirtyDate);
            const day = date.getDay();
            const diff = (day < weekStartsOn ? -7 : 0) + 6 - (day - weekStartsOn);
            date.setHours(0, 0, 0, 0);
            date.setDate(date.getDate() + diff);
            return date
        }

        module.exports = lastDayOfWeek
    }, function (module, exports, __webpack_require__) {
        const getISOYear = __webpack_require__(7);
        const startOfISOWeek = __webpack_require__(8);

        function lastDayOfISOYear(dirtyDate) {
            const year = getISOYear(dirtyDate);
            const fourthOfJanuary = new Date(0);
            fourthOfJanuary.setFullYear(year + 1, 0, 4);
            fourthOfJanuary.setHours(0, 0, 0, 0);
            const date = startOfISOWeek(fourthOfJanuary);
            date.setDate(date.getDate() - 1);
            return date
        }

        module.exports = lastDayOfISOYear
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function lastDayOfMonth(dirtyDate) {
            const date = parse(dirtyDate);
            const month = date.getMonth();
            date.setFullYear(date.getFullYear(), month + 1, 0);
            date.setHours(0, 0, 0, 0);
            return date
        }

        module.exports = lastDayOfMonth
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function lastDayOfQuarter(dirtyDate) {
            const date = parse(dirtyDate);
            const currentMonth = date.getMonth();
            const month = currentMonth - currentMonth % 3 + 3;
            date.setMonth(month, 0);
            date.setHours(0, 0, 0, 0);
            return date
        }

        module.exports = lastDayOfQuarter
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function lastDayOfYear(dirtyDate) {
            const date = parse(dirtyDate);
            const year = date.getFullYear();
            date.setFullYear(year + 1, 0, 0);
            date.setHours(0, 0, 0, 0);
            return date
        }

        module.exports = lastDayOfYear
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function max() {
            const dirtyDates = Array.prototype.slice.call(arguments);
            const dates = dirtyDates.map(function (dirtyDate) {
                return parse(dirtyDate)
            });
            const latestTimestamp = Math.max.apply(null, dates);
            return new Date(latestTimestamp)
        }

        module.exports = max
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function min() {
            const dirtyDates = Array.prototype.slice.call(arguments);
            const dates = dirtyDates.map(function (dirtyDate) {
                return parse(dirtyDate)
            });
            const earliestTimestamp = Math.min.apply(null, dates);
            return new Date(earliestTimestamp)
        }

        module.exports = min
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function setDate(dirtyDate, dirtyDayOfMonth) {
            const date = parse(dirtyDate);
            const dayOfMonth = Number(dirtyDayOfMonth);
            date.setDate(dayOfMonth);
            return date
        }

        module.exports = setDate
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const addDays = __webpack_require__(1);

        function setDay(dirtyDate, dirtyDay, dirtyOptions) {
            const weekStartsOn = dirtyOptions ? Number(dirtyOptions.weekStartsOn) || 0 : 0;
            const date = parse(dirtyDate);
            const day = Number(dirtyDay);
            const currentDay = date.getDay();
            const remainder = day % 7;
            const dayIndex = (remainder + 7) % 7;
            const diff = (dayIndex < weekStartsOn ? 7 : 0) + day - currentDay;
            return addDays(date, diff)
        }

        module.exports = setDay
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function setDayOfYear(dirtyDate, dirtyDayOfYear) {
            const date = parse(dirtyDate);
            const dayOfYear = Number(dirtyDayOfYear);
            date.setMonth(0);
            date.setDate(dayOfYear);
            return date
        }

        module.exports = setDayOfYear
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function setHours(dirtyDate, dirtyHours) {
            const date = parse(dirtyDate);
            const hours = Number(dirtyHours);
            date.setHours(hours);
            return date
        }

        module.exports = setHours
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const addDays = __webpack_require__(1);
        const getISODay = __webpack_require__(75);

        function setISODay(dirtyDate, dirtyDay) {
            const date = parse(dirtyDate);
            const day = Number(dirtyDay);
            const currentDay = getISODay(date);
            const diff = day - currentDay;
            return addDays(date, diff)
        }

        module.exports = setISODay
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const getISOWeek = __webpack_require__(68);

        function setISOWeek(dirtyDate, dirtyISOWeek) {
            const date = parse(dirtyDate);
            const isoWeek = Number(dirtyISOWeek);
            const diff = getISOWeek(date) - isoWeek;
            date.setDate(date.getDate() - diff * 7);
            return date
        }

        module.exports = setISOWeek
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function setMilliseconds(dirtyDate, dirtyMilliseconds) {
            const date = parse(dirtyDate);
            const milliseconds = Number(dirtyMilliseconds);
            date.setMilliseconds(milliseconds);
            return date
        }

        module.exports = setMilliseconds
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function setMinutes(dirtyDate, dirtyMinutes) {
            const date = parse(dirtyDate);
            const minutes = Number(dirtyMinutes);
            date.setMinutes(minutes);
            return date
        }

        module.exports = setMinutes
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const getDaysInMonth = __webpack_require__(16);

        function setMonth(dirtyDate, dirtyMonth) {
            const date = parse(dirtyDate);
            const month = Number(dirtyMonth);
            const year = date.getFullYear();
            const day = date.getDate();
            const dateWithDesiredMonth = new Date(0);
            dateWithDesiredMonth.setFullYear(year, month, 15);
            dateWithDesiredMonth.setHours(0, 0, 0, 0);
            const daysInMonth = getDaysInMonth(dateWithDesiredMonth);
            date.setMonth(month, Math.min(day, daysInMonth));
            return date
        }

        module.exports = setMonth
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);
        const setMonth = __webpack_require__(142);

        function setQuarter(dirtyDate, dirtyQuarter) {
            const date = parse(dirtyDate);
            const quarter = Number(dirtyQuarter);
            const oldQuarter = Math.floor(date.getMonth() / 3) + 1;
            const diff = quarter - oldQuarter;
            return setMonth(date, date.getMonth() + diff * 3)
        }

        module.exports = setQuarter
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function setSeconds(dirtyDate, dirtySeconds) {
            const date = parse(dirtyDate);
            const seconds = Number(dirtySeconds);
            date.setSeconds(seconds);
            return date
        }

        module.exports = setSeconds
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function setYear(dirtyDate, dirtyYear) {
            const date = parse(dirtyDate);
            const year = Number(dirtyYear);
            date.setFullYear(year);
            return date
        }

        module.exports = setYear
    }, function (module, exports, __webpack_require__) {
        const parse = __webpack_require__(2);

        function startOfMonth(dirtyDate) {
            const date = parse(dirtyDate);
            date.setDate(1);
            date.setHours(0, 0, 0, 0);
            return date
        }

        module.exports = startOfMonth
    }, function (module, exports, __webpack_require__) {
        const startOfDay = __webpack_require__(13);

        function startOfToday() {
            return startOfDay(new Date)
        }

        module.exports = startOfToday
    }, function (module, exports) {
        function startOfTomorrow() {
            const now = new Date;
            const year = now.getFullYear();
            const month = now.getMonth();
            const day = now.getDate();
            const date = new Date(0);
            date.setFullYear(year, month, day + 1);
            date.setHours(0, 0, 0, 0);
            return date
        }

        module.exports = startOfTomorrow
    }, function (module, exports) {
        function startOfYesterday() {
            const now = new Date;
            const year = now.getFullYear();
            const month = now.getMonth();
            const day = now.getDate();
            const date = new Date(0);
            date.setFullYear(year, month, day - 1);
            date.setHours(0, 0, 0, 0);
            return date
        }

        module.exports = startOfYesterday
    }, function (module, exports, __webpack_require__) {
        const addDays = __webpack_require__(1);

        function subDays(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return addDays(dirtyDate, -amount)
        }

        module.exports = subDays
    }, function (module, exports, __webpack_require__) {
        const addHours = __webpack_require__(4);

        function subHours(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return addHours(dirtyDate, -amount)
        }

        module.exports = subHours
    }, function (module, exports, __webpack_require__) {
        const addMilliseconds = __webpack_require__(5);

        function subMilliseconds(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return addMilliseconds(dirtyDate, -amount)
        }

        module.exports = subMilliseconds
    }, function (module, exports, __webpack_require__) {
        const addMinutes = __webpack_require__(14);

        function subMinutes(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return addMinutes(dirtyDate, -amount)
        }

        module.exports = subMinutes
    }, function (module, exports, __webpack_require__) {
        const addMonths = __webpack_require__(15);

        function subMonths(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return addMonths(dirtyDate, -amount)
        }

        module.exports = subMonths
    }, function (module, exports, __webpack_require__) {
        const addQuarters = __webpack_require__(17);

        function subQuarters(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return addQuarters(dirtyDate, -amount)
        }

        module.exports = subQuarters
    }, function (module, exports, __webpack_require__) {
        const addSeconds = __webpack_require__(18);

        function subSeconds(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return addSeconds(dirtyDate, -amount)
        }

        module.exports = subSeconds
    }, function (module, exports, __webpack_require__) {
        const addWeeks = __webpack_require__(19);

        function subWeeks(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return addWeeks(dirtyDate, -amount)
        }

        module.exports = subWeeks
    }, function (module, exports, __webpack_require__) {
        const addYears = __webpack_require__(20);

        function subYears(dirtyDate, dirtyAmount) {
            const amount = Number(dirtyAmount);
            return addYears(dirtyDate, -amount)
        }

        module.exports = subYears
    }])
});
