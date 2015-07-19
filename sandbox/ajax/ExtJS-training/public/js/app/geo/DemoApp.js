/**
 * @author Janet (Zhanna) Kulyk, June 2009
 */

Demo.App = function(){
	var store, locations, grid, dv, detail;
	return{
		init:function(){
			
			Ext.form.VTypes.cityVal  = /^[A-Za-z\-]+/;
			Ext.form.VTypes.cityMask = /[A-Za-z\- ]/;
			Ext.form.VTypes.cityText = 'Invalid City Name.';
			Ext.form.VTypes.city 	= function(v){
				return Ext.form.VTypes.cityVal.test(v);
			};
			
			Ext.form.VTypes.zipVal  = /^[0-9]{5}$/;
			Ext.form.VTypes.zipMask = /[0-9]/;
			Ext.form.VTypes.zipText = 'Invalid Zip Code.';
			Ext.form.VTypes.zip 	= function(v){
				return Ext.form.VTypes.zipVal.test(v);
			};
		
			
			var proxy = new Ext.data.HttpProxy({		
				api: {
					read: 'remote/companies.php',
					create: 'remote/create_company.php',
					update: 'remote/update_company.php',
					destroy: 'remote/destroy_company.php'
				}
			});	
			
		    var reader = new Ext.data.JsonReader(
				{
						idProperty:'id' ,
						root:'data',
						totalProperty:'total',
						successProperty:'success' 	
				}, 
				[ 			  
				   {name: 'name'},
			       {name: 'variable_id'},
			       {name: 'is_percent'},
			       {name: 'is_count'},
			       {name: 'is_average'}		       
			    ]
			);
			
			// new in Ext3 -- Ext.data.DataWriter
			//var writer = new Ext.data.JsonWriter({});
			
		    var store = new Ext.data.Store({
				proxy:proxy,
				id:'variables',
				restful: true,
		        reader: reader
				/*
				 ,
				
				writer: writer,
				listeners : {
					write : function() {
						console.info('SUCCESS: wrote soomething: ', arguments);
					},
					exception: function() {
						console.error('WTF???: ', arguments);
					}
				}
				*/
		                              // data: Ext.grid.dummyData
		    });
			store.load();
			
			
			// *************** start *******************		
	
			var recordFields = [
				{name: 'id', mapping: 'id'},
				{name: 'flag', mapping: 'flag'},
				{name: 'location', mapping: 'location'},
				{name: 'remove', mapping: 'remove'},
			];				
						
			var remoteJsonStore = new Ext.data.JsonStore({
				fields: recordFields,
				url: 'remote/locations.json',
				totalProperty: 'totalcount',
				root: 'rows',
				autoLoad: false,
				//remoteSort: true
			});
			remoteJsonStore.load();			
				
			
	//***************** end ***********************		
			
			
			/*
			var storeLocations_old = new Ext.data.Store ({
				proxy: proxyLocations,
				//url: 'remote/locations.json',				
				reader: new Ext.data.JsonReader(
					{
						root:'rows',
						id:'id'
					},
					[
						'id',
						'flag',
						'location',
						'remove'			
					]
				)
			});
			storeLocations.load();

*/

			
					
			//var storeLocal = new Ext.data.Store ({
				//: arrayReader,
				//proxy: memoryProxy
				//reader: new Ext.data.ArrayReader({id:'id'},[
					//'flag',
					//'location',
					//'remove'
				//])
			//});
			
			function flag(bool){
				if(bool === true) {
					return '<img src="public/resources/img/flag.png">';
				}
				else {
					return '<img src="public/resources/img/flaggray.png">';
				}
			}
			
			function remove(bool){
				if(bool === true) {
					return '<img src="public/resources/img/delete.png">';
				}				
			}
			
			
			
			
			
									
			
			var viewport = new Ext.Viewport({
		        layout: 'border',
		        items: [				
					{
						region: 'north',
						title: 'Teste titulo',
		                html: 'Teste corpo',
		                tbar:[							
							{
								xtype: 'tbfill'
							},
							{
								xtype: 'tbspacer'
							},
							{
								xtype: 'tbseparator'
							},
							{
								xtype: 'tbspacer'
							},
							{
								xtype: 'tbbutton',
								text: 'Logout'
							},				
							{
								xtype: 'tbspacer'
							},
							{
								xtype: 'tbseparator'
							},
							{
								xtype: 'tbspacer'
							},
							{
								xtype: 'tbbutton',
								text: 'Change Password'
							},							
							{
								xtype: 'tbspacer'
							},
							{
								xtype: 'tbseparator'
							},
							{
								xtype: 'tbspacer'
							},
							{
								xtype: 'tbsplit',
								text: 'Tutorial Videos',
								menu: {
									id: 'tutorial_videos',
									items: [
										{
											text: 'Quick Intro (1:29)',
											checked: false
										},
										{
											text: 'Overview (5:54)',
											checked: false
										},
										{
											text: 'Legend Editor Tutorial (2:15)',
											checked: false
										},
										{
											text: 'Variables Tutorial (3:35)',
											checked: false
										},
										{
											text: 'Create Query Tutorial (1:44)',
											checked: false
										},
										{
											text: 'Points tutorial (3:38)',
											checked: false
										}
									]
								}
							},					
							{
								xtype: 'tbspacer'
							},
							{
								xtype: 'tbseparator'
							},
							{
								xtype: 'tbspacer'
							},
							{
								xtype: 'tbbutton',
								text: 'Help'
							}
						]
						//,	
						//html: '<span id="logo">SimplyMap</span><span id="nav_panel"><a href="">Logout</a> | <a href="">Change Password</a> | <a href="">Tutorial Videos</a> | <a href="">Help</a></span>'
						
					}, 						
					{
			            border: false,
			            region:'center',
			            layout:'border',
			            margins:'5 5 0 0',
			            items: 
						[
							{
								region: 'west',								
								split: true,
								width: 300,								
								items:
								[
									{
										xtype: 'panel',
										id: 'locations',
										title: 'Locations',
										html: '<div id="locs"></div>'										
									},
									{
										xtype: 'panel',
										id: 'res_locations',
										html: '<div id="our_locations"></div>'			
									},
									{
										xtype:'panel',
										id: 'variables',
										title: "Variables",
										height:130
									},
									{
										xtype:'panel',
										id: 'geounit',
										title: 'Geographic Unit',
										height:100
									},
									{
										xtype:'panel',
										id: 'settings',
										title: 'Settings',
										height:100
									}
								]
							},
							{
				                xtype: 'tabpanel',
				                region: 'center',
				                activeTab: 1,
				                items: 
								[ 
									{
					                    title: 'Map View'
					                }, 
									{
										xtype: 'demogrid',
										id: 'demogrid',
										title: 'Report View',
										store: store
									}										
								]
				            }
						]
	        		}
				]
			});	
			
						
			var combo_state = {
						xtype: 'combo',
						name: 'state',
						fieldLabel: 'State',
						typeAhead: true,
						allowBlank: false,
						mode: 'local',
						store: new Ext.data.ArrayStore({
							fields: ['state'],
							data: [
								['Select State'],['Alabama'],['Alaska'],['Arizona'],['Arkansas'],['Californja'],['Colorado'],['Connecticut'],['Delaware'],['Florida'],['Georgia'],['Hawaii'],['Idaho'],['Illinois'],['Indiana'],['Iowa'],['Kansas'],['Kentucky'],['Louisiana'],['Maine'],['Maryland'],['Massachisetts'],['Michigan'],['Minnesota'],['Mississippi'],['Missouri'],['Montana'],['Nebraska'],['Nevada'],['New Hampshire'],['NewJersey'],['New Mexico'],['New York'],['North Carolina'],['North Dakota'],['Ohio'],['Oklahoma'],['Oregon'],['Pennsylvania'],['Rhode Island'],['South Carolina'],['South Dakota'],['Tennessee'],['Texas'],['Utah'],['Vermont'],['Virginia'],['Washington'],['West Virginia'],['Wisconsin'],['Wyoming']
							]
						}),
						displayField: 'state',
                		forceSelection: true,
                		selectOnFocus: true,
						triggerAction: 'all',
						valueField: 'state',
						value: 'Select State'
			};			
								
			
			var locations_form = new Ext.form.FormPanel({
				initialConfig: {
					method: 'POST',
					title: 'Country: USA',
					fileUpload: false,
					standardSubmit: false,
					baseParams: {
						foo: 'bar',
						sna: 'fu'
					},
					
					
					url: 'remote/success.php',
					renderTo: Ext.get('locs'),
					frame: true,
					autoHeight: true,
					labelWidth: 80,
					defaultType: 'textfield',
					defaults: {
						msgTarget: 'side',
						anchor: '-20'
					},					
					items: [
					combo_state, 
					{
						xtype: 'textfield',
						name: 'city',
						fieldLabel: 'City',
						allowBlank: false,
						vtype: 'city'
					}, {
						xtype: 'textfield',
						name: 'zip',
						fieldLabel: 'Zip',
						allowBlank: false,
						vtype: 'zip'
					}],
					buttons: [{
						text: 'Submit',
						handler: function(){
							locations_form.getForm().submit({
								success: function(f, a){
									Ext.Msg.alert('Success', 'It worked');
								},
								failure: function(f, a){
									if (a.failureType === Ext.form.Action.CONNECT_FAILLURE) {
										Ext.Msg.alert('Failure', 'Server reported: ' + a.response.status + ' ' + a.response.statusText);
									}
									if (a.failureType === Ext.form.Action.SERVER_INVALID) {
										Ext.Msg.alert('Warning', a.result.errormsg);
									}
								}
							});
						}
					}, {
						text: 'Reset',
						handler: function(){
							locations_form.getForm().reset();
						}
					}]
				}
			});
			
			
					
			
			var locations_store = new Ext.data.Store ({
				data: [
					[
						true,
						'New York, NY',
						true
					],[
						false,
						'San Francisco, CA',
						true
					],[
						true,
						'Chicago, IL',
						true
					],[
						false,
						'Toronto, ON',
						true
					]
				],
				reader: new Ext.data.ArrayReader({id:'id'},[
					'flag',
					'location',
					'remove'
				])
			});
			
			function flag(bool){
				if(bool === true) {
					return '<img src="public/resources/img/flag.png">';
				}
				else {
					return '<img src="public/resources/img/flaggray.png">';
				}
			}
			
			function remove(bool){
				if(bool === true) {
					return '<img src="public/resources/img/delete.png">';
				}				
			}
			
			var columnModel = [
				{header: 'id', dataIndex:'id'},
				{header: 'flag', dataIndex:'flag', renderer: flag, width:30},
				{header: 'Location', dataIndex: 'location', sortable: true, width:210},
				{header: 'remove', dataIndex: 'remove', renderer: remove, width:45}
			];
			
			var grid = new Ext.grid.GridPanel ({
				renderTo: Ext.get('our_locations'),
				frame: true,
				title: 'Locations Grid',
				height:150,
				width: 300,
				store: locations_store,
				stripeRows: true,
				columns: [
					{header: 'flag', dataIndex:'flag', renderer: flag, width:30},
					{header: 'Location', dataIndex: 'location', sortable: true, width:210},
					{header: 'remove', dataIndex: 'remove', renderer: remove, width:45}
				]
			});
									
									
										
			
			
			
							
									
									
										
		}
	}
}();
