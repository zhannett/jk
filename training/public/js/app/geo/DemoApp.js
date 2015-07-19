/**
 * @author Janet
 */

Demo.App = function(){
	var store, editWin, grid, dv, detail;
	return{
		init:function(){
			var proxy = new Ext.data.HttpProxy({		
				api: {
					read: 'remote/companies.php',
					create: 'remote/create_company.php',
					update: 'remote/update_company.php',
					destroy: 'remote/destroy_company.php'
				}
			});
		
		    var reader = new Ext.data.JsonReader({
					idProperty:'id' ,
					root:'data',
					totalProperty:'total',
					successProperty:'success'         //data.ArrayReader		
			}, [ 
			   /*
			   {name: 'id'},
		       {name: 'name'},
		       {name: 'price', type: 'float'},
		       {name: 'change', type: 'float'},
		       {name: 'pctChange', type: 'float'},
		       {name: 'last_updated', type: 'date', dateFormat: 'n/j h:ia'},
		       {name: 'industry'},
		       {name: 'desc'}
		     */
			   {name: 'name'},
		       {name: 'variable_id'},
		       {name: 'is_percent'},
		       {name: 'is_count'},
		       {name: 'is_average'}		       
		    ]);
			
			// new in Ext3 -- Ext.data.DataWriter
			var writer = new Ext.data.JsonWriter({});
			
		    var store = new Ext.data.Store({
				proxy:proxy,
				id:'companies',
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
			
			var viewport = new Ext.Viewport({
		        layout: 'border',
		        items: 
				[				
					{
						region: 'north',
						xtype: 'panel',	
						html: '<span id="logo">SimplyMap</span><span id="nav_panel"><a href="">Logout</a> | <a href="">Change Password</a> | <a href="">Tutorial Videos</a> | <a href="">Help</a></span>'
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
								//split: true,
								width: 300,
								html:'forms will go here'
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
		}
	}
}();
