from diagrams import Diagram,Cluster
#from diagrams.aws.compute import Lambda
#from diagrams.aws.ml import Personalize
#from diagrams.aws.analytics import KinesisDataStreams, KinesisDataFirehose, Athena, Quicksight, Glue
from diagrams.onprem.client import Client
#from diagrams.aws.storage import S3
from diagrams.generic.device import *
from diagrams.generic.network import *
from diagrams.generic.os import *
from diagrams.onprem.container import Docker
from diagrams.onprem.network import Apache
from diagrams.onprem.compute import Server
from diagrams.onprem.client import Client
with Diagram(name='お家ネットワーク',filename="home-network",show=False):
    # インスタンス化によってノードを作成
    # ノードにラベルを付与でき、\nを入れることでラベルの改行も可能
    aterm=Router("ルーター\n192.168.10.1")
    pc=Windows("メインPC\n192.168.10.2")
    raspberry=LinuxGeneral("raspberry pi\n192.168.10.10")
    docker=Docker()
    
    with Cluster("192.168.10.100～199"):
        ios=IOS()
        android=Android()
    with Cluster("Dockerコンテナ群"):
        apache=Apache("webサーバ\nports:37501")
        vpn=VPN("VPNサーバ\nports:500,4500,5555")
        dns=Server("DNSサーバ\nports:53,67,443")
        samba=Server("共有サーバ\nports:445")
        mydns=Server("IP通知サーバ")
        hub=Switch("仮想ハブ\n192.168.30.1")
        with Cluster("VPNクライアント\n192.168.30.*"):
            hub-[Client(),Client()]
            
    aterm-[pc,ios,android,raspberry]
    raspberry-docker-[apache,dns,vpn,samba,mydns]
    vpn-hub
