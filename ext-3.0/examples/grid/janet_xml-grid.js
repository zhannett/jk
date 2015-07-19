/*
 * Ext JS Library 3.0 Pre-alpha
 * Copyright(c) 2006-2008, Ext JS, LLC.
 * licensing@extjs.com
 * 
 * http://extjs.com/license
 */

Ext.onReady(function(){

    // create the Data Store
    var store = new Ext.data.Store({
        // load using HTTP
        url: 'janet_variables.xml',

        // the return will be XML, so lets set up a reader
        reader: new Ext.data.XmlReader({
               // records will have an "Item" tag
               record: 'variable',
               id: 'id',
               totalRecords: '@total'
           }, [
               // set up the fields mapping into the xml doc
               // The first needs mapping, the others are very basic
               {name: 'name', mapping: 'name'},
			   'description'
           ])
    });

    // create the grid
    var grid = new Ext.grid.GridPanel({
        store: store,
        columns: [
            {header: "ID", width: 20, dataIndex: 'id', sortable: true},
            {header: "Name", width: 380, dataIndex: 'name', sortable: true},
            {header: "Description", width: 600, dataIndex: 'description', sortable: false}
        ],
        renderTo:'example-grid',
        width:1000,
        height:200
    });

    store.load();
});
