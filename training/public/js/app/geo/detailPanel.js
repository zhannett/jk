Demo.DetailPanel = Ext.extend(Ext.Panel, {
	
  initComponent : function() {
    Ext.applyIf(this, {
      detailsTpl : new Ext.Template(
        '<p><b>Company:</b> {name}</p>',
        '<p><b>Price:</b> {price:usMoney}</p>',
        '<p><b>Change:</b> {change}</p>',
        '<p><b>% Change:</b> {pctChange}</p>',
        '<p><b>Last Updated:</b> {last_updated:date}</p>'
      ),
      height : 200,
	  margins: '0 0 5 0',
	  cmargins: '0 0 0 0',
	  collapsible: true,
	  collapseMode: 'mini',
      autoScroll : true,
      html : '<p>Click on a company to see the details.</p>'
    });
    Demo.DetailPanel.superclass.initComponent.call(this);
  },

  loadRecord : function(rec) {
    this.detailsTpl.overwrite(this.body, rec.data);
    Ext.fly(this.body).highlight();
  }
});
Ext.reg('detailpanel', Demo.DetailPanel);