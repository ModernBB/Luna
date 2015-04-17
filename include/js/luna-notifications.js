
luna = window.luna || {};

notifications = luna.notifications = {

	/**
	 * Runner for the notification module
	 * 
	 * Creates required Views and Models.
	 */
	run: function() {

		this.pending = new notifications.Model.Notifications;
		this.view    = new notifications.View.Menu({ notifications: this.pending });
	}

};

_.extend( notifications, { Model: {}, View: {} } );

_.extend( notifications.Model, {

	/**
	 * luna.notifications.Model.Notification
	 * 
	 * Contains the notification's data
	 * 
	 * @param    string    [id]      Notification ID
	 * @param    string    [user_id] Notification User ID
	 * @param    string    [message] Notification Content
	 * @param    string    [icon]    Notification Icon
	 * @param    string    [link]    Notification Related URL
	 * @param    string    [time]    Notification Time
	 */
	Notification: luna.Backbone.Model.extend({

		defaults: {
			id:      '',
			user_id: '',
			message: '',
			icon:    '',
			link:    '',
			time:    '',
		},

		/**
		 * Parse model's attributes.
		 * 
		 * Currently only format the notification's time into standard
		 * JS Time value.
		 * 
		 * @param    array    resp XHR Response
		 * 
		 * @return   array    Parse response
		 */
		parse: function( resp ) {

			if ( ! resp ) {
				return resp;
			}

			resp.time = new Date( resp.time * 1000 );

			return resp;
		}

	})
},
{
	/**
	 * luna.notifications.Model.Notification
	 * 
	 * Contains the notification's data
	 */
	Notifications: luna.Backbone.Collection.extend({

		url: window.ajaxurl,

		/**
		 * Parse XHR responses into suitable notification models
		 * for the Collection.
		 * 
		 * @param    array    resp XHR Response
		 * 
		 * @return   array    Parse response
		 */
		parse: function( resp ) {

			if ( ! resp ) {
				return resp;
			}

			_.map( resp, function( attr, i ) {
				var model = new notifications.Model.Notification,
				    attr = _.pick( attr || {}, _.keys( model.defaults ) );
				    attr = model.parse( attr );
				return resp[ i ] = model.set( attr, { silent: true } );
			} );

			return resp;
		},

		/**
		 * Override Backbone.sync()
		 * 
		 * @param    string    method
		 * @param    object    Backbone.Collection
		 * @param    object    options
		 * 
		 * @return   Promise
		 */
		sync: function( method, models, options ) {

			if ( 'read' === method ) {

				var options = options || {};
				_.extend( options, {
					data: {
						action: 'fetch-notifications',
					}
				});

				return luna.ajax.send( options );
			} else {
				return luna.Backbone.sync.apply( this, arguments );
			}
		},
	})
} );

_.extend( notifications.View, {

	/**
	 * luna.notifications.View.Notification
	 */
	Notification: luna.Backbone.View.extend({}),

	/**
	 * luna.notifications.View.Notifications
	 */
	Notifications: luna.Backbone.View.extend({

		el: '.notification-menu',
	})
},
{
	/**
	 * luna.notifications.View.Menu
	 */
	Menu: luna.Backbone.View.extend({

		el: '#notification-menu-item',

		/**
		 * Initialize the View
		 * 
		 * @param    object    [options]
		 * @param    object    [options.notifications] Backbone.Collection
		 */
		initialize: function( options ) {

			this.notifications = options.notifications || {};

			// Fly out moode?
			if ( this.$( '.notification-menu' ).length ) {
				this.submenu = notifications.View.Notifications;
			}

			_.bindAll( this, 'update' );

			this.$document = $( document );
			this.$document.on( 'heartbeat-tick', this.update );

			this.notifications.on( 'sync', this.updateMenu, this );
		},

		/**
		 * Update the collection on heartbeat.
		 * 
		 * @param    object    Event
		 * @param    object    XHR Response
		 * @param    string    XHG Status
		 * @param    object    XHR
		 */
		update: function( event, response, status, xhr ) {

			if ( _.isUndefined( response.notifications ) || this.notifications.length ) {
				return;
			}

			this.notifications.fetch();
		},

		/**
		 * Update the menu when collection is synced.
		 */
		updateMenu: function() {

			this.$( '#notifications-number' ).html( this.notifications.length );
		}
	})
} );

luna.runners.push( notifications );