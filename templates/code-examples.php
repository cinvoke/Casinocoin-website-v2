	<div class="container page">
<section>
<div class="text-center">

	<h2><?php echo CODE_EXAMPLES_TITLE ?></h2>
	<h4><?php echo COE_HEADER_SUPPORT_TEXT ?></h4>
</div>	

<h3><?php echo COE_LIST_TITLE_1 ?></h3>
<pre>listen=1
daemon=1
server=0
rpcuser=user
rpcpassword=password
rpcconnect=127.0.0.1
rpcallowip=127.0.0.1
rpcport=47970
addnode=seed.casinocoin.org:47950 
addnode=seed1.casinocoin.org:47950
addnode=seed2.casinocoin.org:47950
addnode=seed3.casinocoin.org:47950
addnode=107.170.240.40:47950
addnode=50.116.32.4:47950
addnode=99.249.22.39:47950</pre>

<h3><?php echo COE_LIST_TITLE_2 ?></h3>
<h6 class="homeh6rev"><a href="http://jsonrpcphp.org/?page=download&lang=en" target="_BLANK"><?php echo COE_LIST_TITLE_2_SUPPORT ?></a></h6>


<pre>
/* PHP Example */

require_once 'jsonRPCClient.php';
 
  $casinocoin = new jsonRPCClient('http://user:password@127.0.0.1:8332/');
 
  echo "&lt;pre&gt;\n";
  print_r($casinocoin->getinfo()); echo "\n";
  echo "Received: ".$casinocoin->getreceivedbylabel("Your Address")."\n";
  echo "&lt;/pre&gt;";</pre>


</section>

</div>