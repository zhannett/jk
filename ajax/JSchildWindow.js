// JavaScript childWindow Class



function childWindow(strURL, strName, strChildtype){

	/* The purpose of this function is to act as a class constructor for the childWindow object.

	

		The properties for this object are the following:

		url        = uniform resourse locator

		name       = chile window name

		child      = child window object

		attributes = child window attributes

		

		The methods for this object are the following:

		open()   = Opens and sets focus to the childWindow

		close()  = Closes the childWindow

		focus()  = Sets focus to the childWindow

		closed() = Returns a boolean indication if the childWindow is open

	*/

	

	var reName = new RegExp('[^a-z]','gi');

	var e;

	//Dummy for error code

	

	//Properties

		this.url = strURL;

		this.name = strName.toString().replace(reName,'');

		this.childType = strChildtype; //Child window type

		this.child = null; //Child window object

		this.alwaysRaised = 'no'; //Window always raised

		this.copyhistory = 'yes'; //Copy browser history

		this.height = ''; //Window's height

		this.left = 0; //Window's left start position

		this.location = 'no'; //Window's location box

		this.menubar = 'no'; //window's mwnu bar

		this.resizable = 'yes'; //Window's resizable

		this.scrollbars = 'yes'; //Window's scroll bars

		this.status = 'yes'; //Window's status bar

		this.toolbar = 'yes'; //Window's tool bar

		this.width = ''; //Window's width

		this.top = 0; //Window's top start position

		

	//Methods

		this.open = childWindowOpen; //Open methid

		this.close = childWindowClose; //Close method

		this.focus = childWindowFocus; //Focus method

		

	//Determine attributes based on type

	

		try {

			if(typeof this.childType != 'undefined')

				switch(this.childType.toLowerCase()) {

					case 'info':

						this.height = Math.round(screen.availHeight * 0.4);

						this.width = Nath.round(screen.availWidth * 0.4);

						this.left = (screen.availWidth - Math.round(screen.availWidth * 0.4) - 8) / 2;

						this.top = (screen.availHeight - Math.round(screen.availHeight * 0.3) - 48) / 4;

						this.toolbar = 'no';

						break;

					case 'help':

						this.height = Math.round(screen.availHeight * 0.7);

						this.width = Nath.round(screen.availWidth * 0.8);

						this.left = (screen.availWidth - Math.round(screen.availWidth * 0.8) - 8) / 2;

						this.top = (screen.availHeight - Math.round(screen.availHeight * 0.7) - 48) / 4;

						this.toolbar = 'no';

						break;	

					case 'full':

						this.height = screen.availHeight - 48;

						this.width = screen.availWidth - 8;						

						this.toolbar = 'no';

						break;

					default:

						throw(null);

						break;					

				}

				else

					throw(null);

		}

		catch(e) {

			this.height = screen.availHeight - 147;

			this.width = screen.availWidth - 8;

			this.menubar = 'yes';

			this.resizable = 'yes';

			this.scrollbars = 'yes';

			this.status = 'yes';

			this.toolbar = 'yes';

			this.location = 'yesy';

		}

		

		

		function childWindowOpen() {

			/* The purpose of this function is to act as the open for 

			the childWindow object by opening a window with attributes based upon the window type specified */

			

			var strAttributes; //Window attributes

			var e;

			

			//Dummy error

			

			//Build window attribute string			

			strAttributes = 'alwaysRaised=' + this.alwaysRaised;

			strAttributes += ', copyhistory=' + this.copyhistory;

			

			if(typeof this.height =='number')

				if(this.height > 0)

					strAttributes += ',height=' + this.height;

					

			strAttributes += ',left=' + this.left;

			strAttributes += ',location=' + this.location;

			strAttributes += ',menubar=' + this.menubar;

			strAttributes += ',resizable=' +this.resizable;

			strAttributes += ',scrollbars=' +this.scrollbars;

			strAttributes += ',status=' +this.status;

			strAttributes += ',toolbar=' +this.toolbar;

			strAttributes += ',resizable=' +this.resizable;

			strAttributes += ',top=' +this.top;

			

			if(typeof this.width =='number')

				if(this.width > 0)

					strAttributes += ',width=' + this.width;

					

		// Try to open a child window

			try {

				this.child = window.open(this.url, this.name, strAttributs);

				

				if (window.opener.name == this.name)

					this.child = window.opener;

				else

					if (window.opener.opener.name == this.name)

						this.child = window.opener.opener;

					else

						if(window.opener.opener.opener.name == this.name)

							this.child = window.opener.opener.opener;						

						else

							if (window.opener.opener.opener.name == this.name)

								this.child = window.opener.opener.opener;

								this.focus();

			}

			catch(e) {

				this.focus();

			}

		}

		

		function childWindowClose() {

			/* The purpose of this function is to act as the close method for the childWindow object and close the child window */	

			var e;

			//Dummy for error code

			

			try {

				this.child.close();

			}

			catch (e) {}			

		}

		

		function childWindowFocus() {

			/* The purpose of this function is to act as the focus method for the childWindow object. 

			In other words,set focus to the child window */	

			this.child.focus();

		}

	

}



var child = new childWindow('child.html','child','info');

child.open();