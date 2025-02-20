<?php
/**
 * @param array{
 * backgroundColor,
 * onepage,
 * companyName,
 * homeLink,
 * aboutLink,
 * contactLink,
 * location,
 * phone,
 * email,
 * aboutCompany,
 * facebook,
 * whatsapp,
 * twitter,
 * instagram,
 * facebookLink,
 * twitterLink,
 * whatsappLink,
 * instagramLink
 * } $arr
 */

function footer_codea13(array $arr){
    $lorem="Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aspernatur exercitationem ipsa. 
    Facere mollitia maxime accusamus vero incidunt sit.";

    if(!isset($arr["companyName"])){
        $arr["companyName"]="Company Name";
    }
    if(!isset($arr["homeLink"])){
        $arr["homeLink"]="";
    }
    if(!isset($arr["aboutLink"])){
        $arr["aboutLink"]="#Codea13contactus";
    }
    if(!isset($arr["contactLink"])){
        $arr["contactLink"]="#Codea13contactus";
    }
    if(!isset($arr["location"])){
        $arr["location"]="1234 street avenue";
    }
    
    if(!isset($arr["phone"])){
        $arr["phone"]="+233 XXX XXXX";
    }
    if(!isset($arr["email"])){
        $arr["email"]="support@company.com";
    }
    if(!isset($arr["aboutCompany"])){
        $arr["aboutCompany"]=$lorem;
    }
    if(!isset($arr["facebookLink"])){
        $arr["facebookLink"]="";
    }
    if(!isset($arr["whatsappLink"])){
        $arr["whatsappLink"]="";
    }
    if(!isset($arr["twitterLink"])){
        $arr["twitterLink"]="";
    }
    if(!isset($arr["instagramLink"])){
        $arr["instagramLink"]="";
    }
    if(!isset($arr["backgroundColor"])){
        $arr["backgroundColor"]="rgb(48, 20, 70)";
    }

    if(!isset($arr["facebook"])){
        $arr["facebook"]="on";
    }
    if(!isset($arr["whatsapp"])){
        $arr["whatsapp"]="on";
    }
    if(!isset($arr["twitter"])){
        $arr["twitter"]="on";
    }
    if(!isset($arr["instagram"])){
        $arr["instagram"]="on";
    }
    if(!isset($arr["onePage"])){
        $arr["onePage"]="off";
    }

    echo '
    <style>
        .footer{
            background-color:'.$arr["backgroundColor"].';
            box-sizing:border-box;
            padding:60px;
            display:flex;
            gap:10px;
            line-height:30px;
            padding-bottom:100px;
        }
        .footer>*{
            flex:1;
            color:white;
        }
        .footerlinks>*:before{
            content:"|";
            font-weight:300;
            font-size: 20px;
        }
        .footer-link-1:before{
            content:none;
        }

        .center>*{
            display:flex;
            height:fit-content;
            align-items:center;
            gap:10px;
            margin-bottom:10px;
        }

        a{
            text-decoration:none;
            color: white;
        }

        .socialLinkshere{
            display:flex;
        }
        .socialLinkshere>*{
            margin:10px;
        }

        @media (max-width:880px){
            .footer{
                flex-direction:column-reverse;
                align-items:center;
                justify-content:center;
                gap:40px;
            }
        }
    </style>
        <div class="footer">
            <div class="footer-links">
                <div><span style="color:gold; font-size:20px; font-weight:bold">'.$arr["companyName"].'</span></div><br>

                <div class="footerlinks">';
                    if($arr["onePage"]=="on"){
                        echo '<span style="cursor:pointer" class="footer-link-1" onclick="codea13SupperLoader(\''.$arr["homeLink"].'\')">Home</span>
                        <span style="cursor:pointer" onclick="codea13SupperLoader(\''.$arr["aboutLink"].'\')">About</span>
                        <span style="cursor:pointer" onclick="codea13SupperLoader(\''.$arr["contactLink"].'\')">Contact</span>';
                    }else{
                        echo '<a href="'.$arr["homeLink"].'" class="footer-link-1"><span>Home</span></a>
                            <a href="'.$arr["aboutLink"].'"><span>About</span></a>
                            <a href="'.$arr["contactLink"].'"><span>Contact</span></a>';
                    }

               echo ' </div><br>

                <div>'.$arr["companyName"].' © '.date("Y").'</div>

            </div>


            <div id="Codea13contactus" class="center">

                <div>
                    <a><div style="padding:8px 8px 4px 8px; border-radius:50%; background-color:#666;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995L16.9497 15.9497ZM12 13C10.8954 13 10 12.1046 10 11C10 9.89543 10.8954 9 12 9C13.1046 9 14 9.89543 14 11C14 12.1046 13.1046 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg></div></a>
                    <a><div >'.$arr["location"].'</div></a>
                </div>

                <div>
                    <div style="padding:8px 8px 4px 8px; border-radius:50%; background-color:#666;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z" fill="rgba(255,255,255,1)"></path></svg></div>
                    <div>'.$arr["phone"].'</div>
                </div>

                <div>
                    <div style="padding:8px 8px 4px 8px; border-radius:50%; background-color:#666;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z" fill="rgba(255,255,255,1)"></path></svg></div>
                    <div style="color:lightseagreen" >'.$arr["email"].'</div>
                </div>
                
                
            </div>



            <div class="socials">
                    <h3 style="margin-bottom:10px; color:gold">About '.$arr["companyName"].'</h3>
                    <p style="margin-bottom:20px;">'.$arr["aboutCompany"].'</p>

                    <h2 style="margin-bottom:10px">Connect with us</h2>
                    <div class="socialLinkshere">';
                        if($arr["facebook"]=="on"){
                            echo '<a href="'.$arr["facebookLink"].'" target="_blank"><svg style="background-color:white;" viewBox="0 0 24 24" width="32" height="32"><path d="M15.4024 21V14.0344H17.7347L18.0838 11.3265H15.4024V9.59765C15.4024 8.81364 15.62 8.27934 16.7443 8.27934L18.1783 8.27867V5.85676C17.9302 5.82382 17.0791 5.75006 16.0888 5.75006C14.0213 5.75006 12.606 7.01198 12.606 9.32952V11.3265H10.2677V14.0344H12.606V21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H15.4024Z" fill="rgba(45,48,157,1)"></path></svg></a>';
                        }
                        if($arr["whatsapp"]=="on"){
                            echo '<a href="'.$arr["whatsappLink"].'" target="_blank"><svg style="background-color:white;"  viewBox="0 0 24 24" width="32" height="32"><path d="M12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2ZM8.59339 7.30019L8.39232 7.30833C8.26293 7.31742 8.13607 7.34902 8.02057 7.40811C7.93392 7.45244 7.85348 7.51651 7.72709 7.63586C7.60774 7.74855 7.53857 7.84697 7.46569 7.94186C7.09599 8.4232 6.89729 9.01405 6.90098 9.62098C6.90299 10.1116 7.03043 10.5884 7.23169 11.0336C7.63982 11.9364 8.31288 12.8908 9.20194 13.7759C9.4155 13.9885 9.62473 14.2034 9.85034 14.402C10.9538 15.3736 12.2688 16.0742 13.6907 16.4482C13.6907 16.4482 14.2507 16.5342 14.2589 16.5347C14.4444 16.5447 14.6296 16.5313 14.8153 16.5218C15.1066 16.5068 15.391 16.428 15.6484 16.2909C15.8139 16.2028 15.8922 16.159 16.0311 16.0714C16.0311 16.0714 16.0737 16.0426 16.1559 15.9814C16.2909 15.8808 16.3743 15.81 16.4866 15.6934C16.5694 15.6074 16.6406 15.5058 16.6956 15.3913C16.7738 15.2281 16.8525 14.9166 16.8838 14.6579C16.9077 14.4603 16.9005 14.3523 16.8979 14.2854C16.8936 14.1778 16.8047 14.0671 16.7073 14.0201L16.1258 13.7587C16.1258 13.7587 15.2563 13.3803 14.7245 13.1377C14.6691 13.1124 14.6085 13.1007 14.5476 13.097C14.4142 13.0888 14.2647 13.1236 14.1696 13.2238C14.1646 13.2218 14.0984 13.279 13.3749 14.1555C13.335 14.2032 13.2415 14.3069 13.0798 14.2972C13.0554 14.2955 13.0311 14.292 13.0074 14.2858C12.9419 14.2685 12.8781 14.2457 12.8157 14.2193C12.692 14.1668 12.6486 14.1469 12.5641 14.1105C11.9868 13.8583 11.457 13.5209 10.9887 13.108C10.8631 12.9974 10.7463 12.8783 10.6259 12.7616C10.2057 12.3543 9.86169 11.9211 9.60577 11.4938C9.5918 11.4705 9.57027 11.4368 9.54708 11.3991C9.50521 11.331 9.45903 11.25 9.44455 11.1944C9.40738 11.0473 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.74939 10.663 9.86248 10.5183C9.97128 10.379 10.0652 10.2428 10.125 10.1457C10.2428 9.95633 10.2801 9.76062 10.2182 9.60963C9.93764 8.92565 9.64818 8.24536 9.34986 7.56894C9.29098 7.43545 9.11585 7.33846 8.95659 7.32007C8.90265 7.31384 8.84875 7.30758 8.79459 7.30402C8.66053 7.29748 8.5262 7.29892 8.39232 7.30833L8.59339 7.30019Z" fill="rgba(89,178,26,1)"></path></svg></a>';
                        }
                        if($arr["twitter"]=="on"){
                            echo '<a href="'.$arr["twitterLink"].'" target="_blank"><svg style="background-color:black;"  viewBox="0 0 24 24" width="32" height="32"><path d="M18.2048 2.25H21.5128L14.2858 10.51L22.7878 21.75H16.1308L10.9168 14.933L4.95084 21.75H1.64084L9.37084 12.915L1.21484 2.25H8.04084L12.7538 8.481L18.2048 2.25ZM17.0438 19.77H18.8768L7.04484 4.126H5.07784L17.0438 19.77Z" fill="rgba(255,255,255,1)"></path></svg></a>';
                        }
                        if($arr["instagram"]=="on"){
                            echo '<a href="'.$arr["instagramLink"].'" target="_blank"><svg style="background-color:white;"  viewBox="0 0 24 24" width="32" height="32"><path d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z" fill="rgba(230,52,103,0.93)"></path></svg></a>';
                        }
                           
                    echo '</div>
            </div>
        </div>
    ';
}