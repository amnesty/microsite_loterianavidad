        try {
            var omCookieGroups = JSON.parse(document.getElementById('om-cookie-consent').innerHTML);
            var omGtmEvents = [];
        }
        catch(err) {
            console.log('Cookie groups not found.')
        }

        (function() {
        // ** ONLOAD FUNCTION ** //
            document.addEventListener('DOMContentLoaded', function(){
                var panelButtons = document.querySelectorAll('[data-omcookie-panel-save]');
                var openButtons = document.querySelectorAll('[data-omcookie-panel-show]');
                var deleteButtons = document.querySelectorAll('[data-omcookie-panel-delete]');

                var groups = document.querySelectorAll('[data-omcookie-panel-grp]');
                var radios = document.querySelectorAll('[data-omcookie-panel-grp] input[type=radio]');
                var form = document.getElementById('omCookieForm');
                var i;
                var omCookiePanel = document.querySelectorAll('[data-omcookie-panel]')[0];
                if(omCookiePanel === undefined) return;
                var openCookiePanel = true;

                //Migrate previous system to new one
                var obsoleteCookie = omCookieUtility.getCookie('cookieAlert3');
                if (obsoleteCookie){
                    if (obsoleteCookie == "1") {
                        omCookieUtility.setCookie('omCookieConsent', 'group-4.1,group-1.1,group-2.1,dismiss', 364);
                    }
                    if (obsoleteCookie == "2") {
                        omCookieUtility.setCookie('omCookieConsent', 'group-4.1,group-1.0,group-2.0,dismiss', 364);
                    }
                    omCookieUtility.deleteCookie('cookieAlert3');
                }

                //Enable stuff by Cookie
                var cookieConsentData = omCookieUtility.getCookie('omCookieConsent');
                if(cookieConsentData !== null && cookieConsentData.length > 0){
                    //dont open the panel if we have the cookie
                    openCookiePanel = false;
                    var cookieConsentGrps = cookieConsentData.split(',');
                    var cookieConsentActiveGrps = '';
                    var cookieConsentInactiveGrps = '';


                    for(i = 0; i < cookieConsentGrps.length; i++){
                        if(cookieConsentGrps[i] !== 'dismiss'){
                            var grpSettings = cookieConsentGrps[i].split('.');
                            if(parseInt(grpSettings[1]) === 1){
                                omCookieEnableCookieGrp(grpSettings[0]);
                                cookieConsentActiveGrps += grpSettings[0] + '.1,';
                            } else if(parseInt(grpSettings[1]) === 0){
                                cookieConsentInactiveGrps += grpSettings[0] + '.0,';
                            }
                        }
                    }
                    for(i = 0; i < groups.length; i++){
                        var radio = document.getElementById(groups[i].dataset['omcookieGroup']+'-yes');
                        if(radio && cookieConsentActiveGrps.indexOf(radio.value)  !== -1){
                            radio.checked = true;
                        }

                        var radio = document.getElementById(groups[i].dataset['omcookieGroup']+'-no');
                        if(radio && cookieConsentInactiveGrps.indexOf(radio.value)  !== -1){
                            radio.checked = true;
                        }
                        //check if we have a new group
                        if(cookieConsentData.indexOf(groups[i].dataset['omcookieGroup']) === -1){
                            openCookiePanel = true;
                        }
                    }
                    //push stored events(sored by omCookieEnableCookieGrp) to gtm. We push this last so we are sure that gtm is loaded
                    pushGtmEvents(omGtmEvents);
                    omTriggerPanelEvent(['cookieconsentscriptsloaded']);
                }
                if(openCookiePanel === true){
                    document.dispatchEvent(new CustomEvent("trackPageWithoutCookieConsent"));
                    //timeout, so the user can see the page before he get the nice cookie panel
                    setTimeout(function () {
                        omCookiePanel.classList.toggle('cookie-consent__modal--is-visible');
                    },1000);
                } else {
                    document.dispatchEvent(new CustomEvent("trackPage"));
                }

                //check for button click
                for (i = 0; i < panelButtons.length; i++) {
                    panelButtons[i].addEventListener('click', omCookieSaveAction, false);
                }
                for (i = 0; i < deleteButtons.length; i++) {
                    deleteButtons[i].addEventListener('click', function(){omCookieUtility.deleteCookie('omCookieConsent')}, false);
                }

                for (i = 0; i < openButtons.length; i++) {
                    openButtons[i].addEventListener('click', function () {
                        omCookiePanel.classList.toggle('cookie-consent__modal--is-visible');
                    }, false);
                }
                // enable save button
                for (i = 0; i < radios.length; i++) {
                    radios[i].addEventListener('click', function () {
                        var enableSaveButton = true;
                        for (var i = 0; i < groups.length; i++) {

                            var radio = form.elements[groups[i].dataset['omcookieGroup']];
                            if (radio && radio.value == ""){
                                enableSaveButton = false;
                                break
                            }
                        }
                        if (enableSaveButton) {
                            document.querySelector('[data-omcookie-panel-save="save"]').disabled = false;
                        }
                    }, false);
                }

                //modal window
                var modalLinks = document.querySelectorAll('[aria-controls="cookie-consent__modal-cookies"]');
               
                for (i = 0; i < modalLinks.length; i++) {
                    modalLinks[i].addEventListener('click', function(e){
                        var iframe = document.querySelector("#"+ e.target.getAttribute('aria-controls') +" iframe");
                        iframe.src = e.target.href;
                    }, false);
                }

                

            });
        // ** ONLOAD FUNCTION ** //

        // ** UTILITY FUNCTION ** //
            function Util () {};
        // ** UTILITY FUNCTION ** //

        // ** CLASS MANIPULATIONS FUNCTIONS ** //

            Util.hasClass = function(el, className) {
                if (el.classList) return el.classList.contains(className);
                else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
            };

            Util.addClass = function(el, className) {
                var classList = className.split(' ');
                if (el.classList) el.classList.add(classList[0]);
                else if (!Util.hasClass(el, classList[0])) el.className += " " + classList[0];
                if (classList.length > 1) Util.addClass(el, classList.slice(1).join(' '));
            };

            Util.removeClass = function(el, className) {
                var classList = className.split(' ');
                if (el.classList) el.classList.remove(classList[0]);
                else if(Util.hasClass(el, classList[0])) {
                    var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|$)');
                    el.className=el.className.replace(reg, ' ');
                }
                if (classList.length > 1) Util.removeClass(el, classList.slice(1).join(' '));
            };

            Util.toggleClass = function(el, className, bool) {
                if(bool) Util.addClass(el, className);
                else Util.removeClass(el, className);
            };

            Util.setAttributes = function(el, attrs) {
                for(var key in attrs) {
                    el.setAttribute(key, attrs[key]);
                }
            };

        // ** CLASS MANIPULATIONS FUNCTIONS ** //

        // ** MODAL BEHAVIOUR ** //
            var Modal = function(element) {
                this.element = element;
                this.triggers = document.querySelectorAll('[aria-controls="'+this.element.getAttribute('id')+'"]');
                this.firstFocusable = null;
                this.lastFocusable = null;
                this.moveFocusEl = null; // focus will be moved to this element when modal is open
                this.modalFocus = this.element.getAttribute('data-modal-first-focus') ? this.element.querySelector(this.element.getAttribute('data-modal-first-focus')) : null;
                this.selectedTrigger = null;
                this.showClass = "cookie-consent__modal--is-visible";
                this.initModal();
            };

            Modal.prototype.initModal = function() {
                var self = this;
                //open modal when clicking on trigger buttons
                if ( this.triggers ) {
                for(var i = 0; i < this.triggers.length; i++) {
                    this.triggers[i].addEventListener('click', function(event) {
                    event.preventDefault();
                    if(Util.hasClass(self.element, self.showClass)) {
                        self.closeModal();
                        return;
                    }
                    self.selectedTrigger = event.target;
                    self.showModal();
                    self.initModalEvents();
                    });
                }
                }

                // listen to the openModal event -> open modal without a trigger button
                this.element.addEventListener('openModal', function(event){
                if(event.detail) self.selectedTrigger = event.detail;
                self.showModal();
                self.initModalEvents();
                });

                // listen to the closeModal event -> close modal without a trigger button
                this.element.addEventListener('closeModal', function(event){
                if(event.detail) self.selectedTrigger = event.detail;
                self.closeModal();
                });

                // if modal is open by default -> initialise modal events
                if(Util.hasClass(this.element, this.showClass)) this.initModalEvents();
            };

            Modal.prototype.showModal = function() {
                var self = this;
                Util.addClass(this.element, this.showClass);
                this.getFocusableElements();
                this.moveFocusEl.focus();
                // wait for the end of transitions before moving focus
                this.element.addEventListener("transitionend", function cb(event) {
                self.moveFocusEl.focus();
                self.element.removeEventListener("transitionend", cb);
                });
                this.emitModalEvents('modalIsOpen');
            };

            Modal.prototype.closeModal = function() {
                if(!Util.hasClass(this.element, this.showClass)) return;
                Util.removeClass(this.element, this.showClass);
                this.firstFocusable = null;
                this.lastFocusable = null;
                this.moveFocusEl = null;
                if(this.selectedTrigger) this.selectedTrigger.focus();
                //remove listeners
                this.cancelModalEvents();
                this.emitModalEvents('modalIsClose');
            };

            Modal.prototype.initModalEvents = function() {
                //add event listeners
                this.element.addEventListener('keydown', this);
                this.element.addEventListener('click', this);
            };

            Modal.prototype.cancelModalEvents = function() {
                //remove event listeners
                this.element.removeEventListener('keydown', this);
                this.element.removeEventListener('click', this);
            };

            Modal.prototype.handleEvent = function (event) {
                switch(event.type) {
                case 'click': {
                    this.initClick(event);
                }
                case 'keydown': {
                    this.initKeyDown(event);
                }
                }
            };

            Modal.prototype.initKeyDown = function(event) {
                if( event.keyCode && event.keyCode == 9 || event.key && event.key == 'Tab' ) {
                //trap focus inside modal
                this.trapFocus(event);
                } else if( (event.keyCode && event.keyCode == 13 || event.key && event.key == 'Enter') && event.target.closest('.js-cookie-consent__modal-close')) {
                event.preventDefault();
                this.closeModal(); // close modal when pressing Enter on close button
                }
            };

            Modal.prototype.initClick = function(event) {
                //close modal when clicking on close button or modal bg layer
                if( !event.target.closest('.js-cookie-consent__modal-close') ) return;
                event.preventDefault();
                this.closeModal();
            };

            Modal.prototype.trapFocus = function(event) {
                if( this.firstFocusable == document.activeElement && event.shiftKey) {
                //on Shift+Tab -> focus last focusable element when focus moves out of modal
                event.preventDefault();
                this.lastFocusable.focus();
                }
                if( this.lastFocusable == document.activeElement && !event.shiftKey) {
                //on Tab -> focus first focusable element when focus moves out of modal
                event.preventDefault();
                this.firstFocusable.focus();
                }
            }

            Modal.prototype.getFocusableElements = function() {
                //get all focusable elements inside the modal
                var allFocusable = this.element.querySelectorAll(focusableElString);
                this.getFirstVisible(allFocusable);
                this.getLastVisible(allFocusable);
                this.getFirstFocusable();
            };

            Modal.prototype.getFirstVisible = function(elements) {
                //get first visible focusable element inside the modal
                for(var i = 0; i < elements.length; i++) {
                if( isVisible(elements[i]) ) {
                    this.firstFocusable = elements[i];
                    break;
                }
                }
            };

            Modal.prototype.getLastVisible = function(elements) {
                //get last visible focusable element inside the modal
                for(var i = elements.length - 1; i >= 0; i--) {
                if( isVisible(elements[i]) ) {
                    this.lastFocusable = elements[i];
                    break;
                }
                }
            };

            Modal.prototype.getFirstFocusable = function() {
                if(!this.modalFocus || !Element.prototype.matches) {
                this.moveFocusEl = this.firstFocusable;
                return;
                }
                var containerIsFocusable = this.modalFocus.matches(focusableElString);
                if(containerIsFocusable) {
                this.moveFocusEl = this.modalFocus;
                } else {
                this.moveFocusEl = false;
                var elements = this.modalFocus.querySelectorAll(focusableElString);
                for(var i = 0; i < elements.length; i++) {
                    if( isVisible(elements[i]) ) {
                    this.moveFocusEl = elements[i];
                    break;
                    }
                }
                if(!this.moveFocusEl) this.moveFocusEl = this.firstFocusable;
                }
            };

            Modal.prototype.emitModalEvents = function(eventName) {
                var event = new CustomEvent(eventName, {detail: this.selectedTrigger});
                this.element.dispatchEvent(event);
            };

            function isVisible(element) {
                return element.offsetWidth || element.offsetHeight || element.getClientRects().length;
            };

            //initialize the Modal objects
            var modals = document.getElementsByClassName('js-cookie-consent__modal');
            // generic focusable elements string selector
            var focusableElString = '[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, [tabindex]:not([tabindex="-1"]), [contenteditable], audio[controls], video[controls], summary';
            if( modals.length > 0 ) {
                var modalArrays = [];
                for( var i = 0; i < modals.length; i++) {
                    (function(i){modalArrays.push(new Modal(modals[i]));})(i);
                }
            }
        // ** MODAL BEHAVIOUR ** //

        // ** MODAL LINKS BEHAVIOUR ** //
            var cookiesIntro = document.querySelector('.js-cookie-consent__intro');
            var cookiesPreferences = document.querySelector('.js-cookie-consent__preferences');
            var cookiesPreferencesBtn = document.querySelector('.js-cookie-consent__preferences-btn');
            var cookiesPreferencesBack = document.querySelector('.js-cookie-consent__preferences-back');

            cookiesPreferencesBtn.addEventListener('click', function () {
                cookiesIntro.classList.add('cookie-consent__modal-content--hidden')
                cookiesPreferences.classList.add('cookie-consent__modal-content--show')

                cookiesIntro.classList.remove('cookie-consent__modal-content--show')
                cookiesPreferences.classList.remove('cookie-consent__modal-content--hidden')
            });

            cookiesPreferencesBack.addEventListener('click', function () {
                cookiesPreferences.classList.add('cookie-consent__modal-content--hidden')
                cookiesIntro.classList.add('cookie-consent__modal-content--show')

                cookiesPreferences.classList.remove('cookie-consent__modal-content--show')
                cookiesIntro.classList.remove('cookie-consent__modal-content--hidden')
            });
        // ** MODAL LINKS BEHAVIOUR ** //

        // ** COOKIES BEHAVIOUR ** //

            //activates the groups
            var omCookieSaveAction = function() {
                action = this.getAttribute('data-omcookie-panel-save');
                var form = document.getElementById('omCookieForm');
                var groups = document.querySelectorAll('[data-omcookie-panel-grp]');
                var i;

                cookie = '';

                //save the group id (group-x) and the made choice (.0 for group denied and .1 for group accepted)
                switch (action) {
                    case 'all':
                        for (i = 0; i < groups.length; i++) {
                            var radio = form.elements[groups[i].dataset['omcookieGroup']];
                            if (radio){
                                omCookieEnableCookieGrp(groups[i].dataset['omcookieGroup']);
                                cookie += groups[i].dataset['omcookieGroup'] + ".1,";
                            }
                        }
                    break;
                    case 'save':
                        for (i = 0; i < groups.length; i++) {
                            var radio = form.elements[groups[i].dataset['omcookieGroup']];
                            if (radio){
                                if (radio.value == groups[i].dataset['omcookieGroup'] + ".1" ){
                                    omCookieEnableCookieGrp(groups[i].dataset['omcookieGroup']);
                                }
                                cookie += radio.value +",";
                            }
                        }
                    break;
                    case 'min':
                        for (i = 0; i < groups.length; i++) {
                            var radio = form.elements[groups[i].dataset['omcookieGroup']];

                            if (radio && !radio.dataset) {

                                cookie += groups[i].dataset['omcookieGroup'] + ".0,";
                            }
                            if (radio && radio.dataset) { //essentials
                                omCookieEnableCookieGrp(groups[i].dataset['omcookieGroup']);
                                cookie += groups[i].dataset['omcookieGroup'] + ".1,";
                            }
                        }
                    break;
                }
                //replace dismiss to the end of the cookie
                cookie = cookie.replace('dismiss','');
                cookie += 'dismiss';
                //cookie = cookie.slice(0, -1);
                omCookieUtility.setCookie('omCookieConsent',cookie,364);
                //push stored events to gtm. We push this last so we are sure that gtm is loaded
                pushGtmEvents(omGtmEvents);
                omTriggerPanelEvent(['cookieconsentsave','cookieconsentscriptsloaded']);

                document.dispatchEvent(new CustomEvent("trackPage"));

                setTimeout(function () {
                    document.querySelectorAll('[data-omcookie-panel]')[0].classList.toggle('cookie-consent__modal--is-visible');
                },350)

            };

            var omTriggerPanelEvent = function(events){
              events.forEach(function (event) {
                  var eventObj = new CustomEvent(event, {bubbles: true});
                  document.querySelectorAll('[data-omcookie-panel]')[0].dispatchEvent(eventObj);
              })
            };

            var pushGtmEvents = function (events) {
                window.dataLayer = window.dataLayer || [];
                events.forEach(function (event) {
                    window.dataLayer.push({
                        'event': event,
                    });
                });
            };
            var omCookieEnableCookieGrp = function (groupKey){
                if(omCookieGroups[groupKey] !== undefined){
                    for (var key in omCookieGroups[groupKey]) {
                        // skip loop if the property is from prototype
                        if (!omCookieGroups[groupKey].hasOwnProperty(key)) continue;
                        var obj = omCookieGroups[groupKey][key];
                        //save gtm event for pushing
                        if(key === 'gtm'){
                            if(omCookieGroups[groupKey][key]){
                                omGtmEvents.push(omCookieGroups[groupKey][key]);
                            }
                            continue;
                        }
                        //set the cookie html
                        for (var prop in obj) {
                            // skip loop if the property is from prototype
                            if (!obj.hasOwnProperty(prop)) continue;

                            if(Array.isArray(obj[prop])){
                                var content = '';
                                //get the html content
                                obj[prop].forEach(function (htmlContent) {
                                    content += htmlContent
                                });
                                var range = document.createRange();
                                if(prop === 'header'){
                                    // add the html to header
                                    range.selectNode(document.getElementsByTagName('head')[0]);
                                    var documentFragHead = range.createContextualFragment(content);
                                    document.getElementsByTagName('head')[0].appendChild(documentFragHead);
                                }else{
                                    //add the html to body
                                    range.selectNode(document.getElementsByTagName('body')[0]);
                                    var documentFragBody = range.createContextualFragment(content);
                                    document.getElementsByTagName('body')[0].appendChild(documentFragBody);
                                }
                            }
                        }
                    }
                    //remove the group so we don't set it again
                    delete omCookieGroups[groupKey];
                }
            };
            var omCookieUtility = {
                getCookie: function(name) {
                        var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
                        return v ? v[2] : null;
                    },
                setCookie: function(name, value, days) {
                        var d = new Date;
                        d.setTime(d.getTime() + 24*60*60*1000*days);
                        document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString() + ";SameSite=Lax";
                    },
                deleteCookie: function(name){ omCookieUtility.setCookie(name, '', -1); }
            };

            (function () {

                if ( typeof window.CustomEvent === "function" ) return false;

                function CustomEvent ( event, params ) {
                    params = params || { bubbles: false, cancelable: false, detail: null };
                    var evt = document.createEvent( 'CustomEvent' );
                    evt.initCustomEvent( event, params.bubbles, params.cancelable, params.detail );
                    return evt;
                }

                window.CustomEvent = CustomEvent;
            })();
        // ** COOKIES BEHAVIOUR ** //

        }());


