Locations = Ext.extend(Ext.FormPanel, {
     width:300,
	 autoHeight:true,
	 
	 title: 'test locations',
	 
	 initComponent: function(){
	 	this.items= [
			{	
				xtype:'form',
				bodyStyle: 'padding:10px',
				labelAlign:'right',
				items:
					[
						{
							xtype: 'textfield',
							fieldLabel: 'State',
							name: 'state'	
						},
						{
							xtype: 'textfield',
							fieldLabel: 'City',
							name: 'city'	
						},
						{
							xtype: 'textfield',
							fieldLabel: 'Country',
							name: 'country'	
						},
						{
							xtype: 'textfield',
							fieldLabel: 'Zip',
							name: 'zip'							
						}					
					]
			}
		];
		
		this.buttons=[
	 		{
				text:"Save",
				handler: this.onSave,
				scope:this
			},
			{
				text:"Cancel",
				handler: this.onCancel,
				scope:this
			}
	 	];
		
		
		
	 	Locations.superclass.initComponent.call(this);	
	 },
	 onSave: function(){
	 	this.items.first().getForm().updateRecord(this.record);
		this.hide();
	 },
	 onCancel: function(){
	 	this.hide();
	 },
	 
	 /**
	  * loadRecord
	  * Loads the contained FormPanel with supplied record
	  * @param {Ext.data.Record} rec
	  
	 loadRecord : function(rec) {
	 	console.log("loadRecord: ", rec);
	 	this.record = rec;
	 	this.items.first().getForm().loadRecord(rec);
	 }
     */ 
});
Ext.reg('locations', 'Locations');