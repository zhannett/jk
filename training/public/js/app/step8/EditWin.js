Demo.EditWin = Ext.extend(Ext.Window, {
     width:400,
	 autoHeight:true,
	 closeAction: 'hide',
	 
	 initComponent: function(){
	 	this.items= [
			{	
				xtype:'form',
				bodyStyle: 'padding:10px',
				labelAlign:'right',
				items:[
					{
						xtype:'textfield',
						name: 'name',
						fieldLabel:'Name'
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
		
		
		
	 	Demo.EditWin.superclass.initComponent.call(this);	
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
	  */
	 loadRecord : function(rec) {
	 	console.log("loadRecord: ", rec);
	 	this.record = rec;
	 	this.items.first().getForm().loadRecord(rec);
	 }
      
});
Ext.reg('demowin', Demo.EditWin);