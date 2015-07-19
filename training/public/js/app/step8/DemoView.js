/**
 * @class DemoGri
 */
DemoView = Ext.extend(Ext.DataView, {	
	overClass:'company-over',
    itemSelector:'div.company-wrap',
    emptyText: 'No companies to display',
	
	initComponent : function() {	
	
		this.tpl = new Ext.XTemplate(
	        '<tpl for=".">',
	            '<div class="company-wrap" id="{name}">',
	                '<div class="company-name">{name}</div>',
	                '<div class="company-details">',
	                    '<b>Price</b>: {price:usMoney}<br />',
	                    '<b>Last Updated</b>: {last_updated:date("n/j h:ia")}<br />',
	                    '<b>Industry</b>: {industry}',
	                '</div>',
	            '</div>',
	        '</tpl>'
	    );	
		  
    	DemoView.superclass.initComponent.call(this);		
	}
});
Ext.reg('demoview', DemoView);