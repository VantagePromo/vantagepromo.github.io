YUI.add('placeholder', function(Y) {

    var VALUE = 'value',
        PLACEHOLDER = 'placeholder',
        elements = {},
        events = [];

    function sync() {
        fetchElements();
        render();
    }
    function initializer() {
        if (!placeholderSupport()) {
            sync();
        }        
    }
    function destructor() {
        Y.Array.each(this.events, function(e) {
            e.detach();
        });
    } 
    function fetchElements() {
        elements = Y.all('input[type=text]');
    }
    function render() {
        elements.each(function(i) {
            if (i.get(VALUE) == "") {
                setPlaceholder(i);
                setEvents(i);
            }
        }, this);
    }
    function setPlaceholder(element) {
        element.set(VALUE, element.getAttribute(PLACEHOLDER));         
    }
    function setEvents(element) {
        events.push(element.on('focus', function(e) {
            var currentTarget = e.currentTarget;
            if (currentTarget.get(VALUE) == currentTarget.getAttribute(PLACEHOLDER)) {
                currentTarget.set(VALUE, "");
            } 
        }));

        events.push(element.on('blur', function(e) {
            if (e.currentTarget.get(VALUE) == "") {
                setPlaceholder(e.currentTarget);
            }
        }, this));
    }
    function placeholderSupport() {
        var node = document.createElement('input');
        if (PLACEHOLDER in node) {
            return true;
        }
        return false;
    }

    Y.after('domready', initializer);
    
    Y.namespace('Placeholder').sync = sync;
    
    
}, "1.0.0", {requires: ['event-base', 'node']});

YUI().use('node', 'placeholder', function(Y) {

    var weekdays = [ "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" ],
        months = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "Decemeber"],
        today = new Date(),
        day = today.getDay(),
        date = today.getDate(),
        month = today.getMonth(),
        year = today.getFullYear(),
        minutes = today.getMinutes(),
        hour = today.getHours();

    if (minutes < 10) { minutes = "0" + minutes; }

    Y.one('.time .day').set('innerHTML', weekdays[day]);
    Y.one('.time .datetime').set('innerHTML', months[month] + " " + date + ", " + year + ". " + hour + ":" + minutes);
    Y.one('.col-4 .cpyyear').set('innerHTML', '&copy; ' + year);

    var contactForm = Y.one('#ContactForm a');

    if (contactForm) {
        contactForm.on('click', function(e) {
            contactForm.submit();
        });
    }
});
