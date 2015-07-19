using system;

using System.Collections;

using system.ComponentModel;

using System.Data;

using system.Diagnostics;

using System.IO;

using System.Web;

using System.Web.Services;

using System.Web.Services.Protocols;

using System.Xml;

using MySql.Data.MySqlClient;

using MySql.Data.Types;



namespace AJAX

{

	/// <summary>

	/// Summary description for msas.

	/// </summary>

	public class msas : System.Web.Services.WebService

	{	

		const string CONNECTION_STRING = "Persist Security Info=False;database=janetkul_ajax;server=http://janetkulyk.com;username=janetkul;password=";

		

		public msas()

		{

			InitializeComponent();

		}

		

		#region Component Designer generated code

		

		//Required by the web Services Designer

		private IContainer components = null;

		

		/// <summary>

		/// Required method for Designer support - do not modify the contents of this method with the code editor.

		/// </summary>

		private void InitializeComponent()

		{

		}

		

		/// <summary>

		/// Clean up any resources being used.

		/// </summary>		

		protected override void Dispose ( bool disposing )

		{

			if(disposing && components != null)

			{

				components.Dispose();

			}

			base.Dispose(disposing);

		}

		

		#endregion

		

		[WebMethod]

		public XmlDocument getState(string state_abbreviation)

		{

			MySqlConnection connection = new MySqlConnection(CONNECTION_STRING);

			MySqlDataAdapter adapter = new MySqlDataAdapter();

			DataSet dataSet = new DataSet();

			XmlDocument xml = new XmlDocument();

			string query = "CALL stateSelect(NULL)";

			

			if(state_abbreviation.Length != 0)

				query = "CALL stateSelect('" + state_abbreviation + "')";

					

			adapter.SelectCommand = new MySqlCommand(query,connection);

			adapter.Fill(dataSet);

			xml.LoadXML(dataSet.GetXml());

			

			connection.Close();

			

			return(xml);

		}

		

		[WebMethod]

		public XmlDocument getXML(string name)

		{

			XmlDocument xml = new XmlDocument();

			

			try

			{

				xml.Load(Server.MapPath(name));

			}

			catch(Exception e)

			{

				StringWriter writer = new StringWriter();

				Server.UrlEncode(name,writer);

				String encodeNAme = writer.ToString();

				XmlNode node = xml.CreateNode(XmlNodeType.CDATA,"detail","");

				

				node.Value = encodeName;

				

				throw(new SoapException(e.Message,SoapException.ClientFaultCode,"",node));

			}

			return(xml);

		}

		

		[WebMethod]

		public XmlDocument getItems(string quild_item_id,string guild_id)

		{

			MySqlConnection connection = new MySqlconnection(CONNECTION_STRING);

			MySqlDataAdapter adapter = new MySqlDataAdapter();

			DataSet dataSet = new DataSet();

			XmlDocument xml = new XmlDocument();

			string query;

			

			if(quild_item_id.Length == 0)

				if(guild_id.Length == 0)

					query = "CALL itemSelect(NULL,NULL)";

				else

					query = "CALL itemSelect(NULL," + guild_id + ")";

			else

				if(guild_id.Length == 0)

					query = "CALL itemSelect(" + quild_item_id + ",NULL)";

				else

					query = "CALL itemSelect(" + guild_item_id + "," + guild_id + ")";

					

			adapter.SelectCommend = new MySqlCommand(query,connection);

			adapter.Fill(dataSet);

			xml.LoadXml(dataSet.GetXml());

			

			connection.Close();

			

			return(xml);

		}		

	}

}