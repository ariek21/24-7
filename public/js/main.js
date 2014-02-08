var localStrorageManager = {};

localStrorageManager.getItem = function(key) {
    return JSON.parse(localStorage.getItem(key));
};

localStrorageManager.setItem = function(key, object) {
    localStorage.setItem(key, JSON.stringify(object));
};

App = {};
App.Classes = {};
App.Classes.Models = {};
App.Classes.Views = {};
App.Modules = {};
App.Router = Backbone.Router.extend({
	routes: {}
});

App.Classes.Views.Tabs = Backbone.View.extend({
	el: '.tabs',
	events: {
		'click .tab': 'onTabClick'
	},
	initialize: function () {
		var rel = (localStrorageManager.getItem('clients-page-selected-tab'));
		if (!rel) {
			rel = this.$el.find('.tab:first').attr('rel');
		}

		this.setCurrent(rel);
	},

	onTabClick: function(e) {
		var tab = $(e.currentTarget),
			rel = tab.attr('rel');

		localStrorageManager.setItem('clients-page-selected-tab',rel);

		this.setCurrent(rel);
		e.preventDefault();
	},

	setCurrent: function(rel) {
		this.$el.find('.tab')
			.removeClass('current')
			.filter('[rel="'+rel+'"]')
			.addClass('current');

		$('.tab-content').hide();
		$(rel).show();
	}
});

App.Classes.Views.Contacts = Backbone.View.extend({
	el: '#contacts',
	contactForm: '.new-contact-form',
	contactsList: '.contacts-list',
	addContactFormButton: '.show-new-contact-form-button',
	saveNewContactFormButton: '.save-new-contact-button',
	cancelNewContactFormButton: '.cancel-new-contact-form-button',

	events: {
		'click .show-new-contact-form-button': 'showNewContactForm',
		'click .save-new-contact-button': 'saveNewContactForm',
		'click .cancel-new-contact-form-button': 'cancelNewContactForm',
	},
	initialize: function () {

	},

	showNewContactForm: function (e) {
		this.showContactForm();
		e.preventDefault();
	},	

	cancelNewContactForm: function (e) {
		this.showContactsList();
		e.preventDefault();
	},

	showContactForm: function () {
		// hide
		$(this.addContactFormButton).addClass('hidden');
		$(this.contactsList).addClass('hidden');
		$(this.addContactFormButton).addClass('hidden');
		// show
		$(this.contactForm).removeClass('hidden');
		$(this.saveNewContactFormButton).removeClass('hidden');
		$(this.cancelNewContactFormButton).removeClass('hidden');
	},

	showContactsList: function() {
		$(this.contactForm).addClass('hidden');
		$(this.saveNewContactFormButton).addClass('hidden');
		$(this.cancelNewContactFormButton).addClass('hidden');
		// show
		$(this.contactsList).removeClass('hidden');
		$(this.addContactFormButton).removeClass('hidden');
	},

	saveNewContactForm: function (e) {
		var elem = $(e.currentTarget),
			url = $('#save-contact-url').val(),
			fields = {};

			fields.name = $('#contact-name').val(),
			fields.phone_1 = $('#contact-phone-1').val(),
			fields.phone_2 = $('#contact-phone-2').val(),
			fields.phone_3 = $('#contact-phone-3').val(),
			fields.address = $('#contact-address').val(),
			fields.floor = $('#contact-floor').val(),
			fields.apartment_number = $('#contact-apartment-number').val(),
			fields.email = $('#contact-email').val();
			fields.client_id = $('#contact-client-id').val();

			// validate
		var that = this;
		$.ajax({
			url: url,
			type: 'POST',
			data: fields
		}).done(function () {
			$('#contacts-fields').find('input').each(function () {
				$(this).val('');
			});
			that.showContactsList();

		});
	},


});


$(document).ready(function(){
	App.Modules.Tabs = new App.Classes.Views.Tabs();
	App.Modules.Contacts = new App.Classes.Views.Contacts();
	Backbone.history.start({pushState: false});

});
