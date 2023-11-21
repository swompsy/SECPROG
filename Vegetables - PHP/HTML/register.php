<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="../CSS/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="header-inner">
        </div> 
    </header>

<div class="centre-container">
    <div class="register-container">
        <div class="logo-veji">
            <img src="../source/veji-logo.png" alt="home-background">
        </div>
        
        <form id="registration-form" onsubmit="return validateForm()" action="../Controllers/RegisterController.php" method="post">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <label for="email">Username</label>
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" id="terms" name="terms" required>
                    <a href="#" id="show-terms">I agree to the terms and conditions</a>
                </label>
            </div>            

            <div class="form-group">
                <button type="submit" id="register">Register Now</button>
            </div>

            <div class="form-group" id="signup-link">
                <p>Already have an account ? <a href="Login.php">Sign In</a></p>
            </div>

        </form>
        </div>
    </div>

   <!-- Modal for Terms and Conditions -->
   <div id="terms-modal" class="modal">
    <div class="modal-content">
        <span class="close" id="close-terms">&times;</span>
        <h2>Terms and Conditions</h2>
        <div class="scrollable-content">
            <!-- Add your terms and conditions content here -->
            <!-- You can use paragraphs or any HTML elements you need -->
            <p>PLEASE READ THESE TERMS OF USE CAREFULLY BEFORE USING THIS SERVICE.</p> <br> </br>
            <p>1. WHAT SERVICES DO THESE TERMS COVER? These terms of use ("Terms") cover the following products and services ("Service") however accessed and/or used, which are operated by or otherwise made available by the Pokémon Company International, Inc. or its affiliates ("Pokémon" or "we", "us", or "our"):</p> <br> </br>
            <p>2. THIS IS AN AGREEMENT BETWEEN YOU AND THE POKÉMON COMPANY INTERNATIONAL, INC. By accessing, downloading, or using the Service, you acknowledge that you have read, understood and agreed to these Terms. and any code of conduct that we may put forth from time to time. Where you are permitting a minor to use the Service, you are also agreeing that the minor will adhere to the Terms. Pokémon's Privacy Notice (www.pokemon.com/us/privacy-notice/) ("Privacy Notice"), explains Pokémon's collection, use, transmission and disclosure of your personal information provided by or collected from you. By agreeing to be bound by these Terms, you are also agreeing that you have read and understood the collection, use, transmission and disclosure of your personal information or data as described in the Privacy Notice (and as amended from time to time). You should review the Privacy Notice before using the Service.</p> <br> </br>
            <p>3. InformationCustomer ServiceAbout Our CompanyParents' Guide to PokémonPrivacy NoticeCookie PageTerms of UseLegal informationSecurityCareers
                Terms of Use
                Last Update: June 15, 2023
                
                PLEASE READ THESE TERMS OF USE CAREFULLY BEFORE USING THIS SERVICE.
                
                1. WHAT SERVICES DO THESE TERMS COVER? These terms of use ("Terms") cover the following products and services ("Service") however accessed and/or used, which are operated by or otherwise made available by the Pokémon Company International, Inc. or its affiliates ("Pokémon" or "we", "us", or "our"):
                
                (i) www.Pokemon.com;
                
                (ii) The Pokémon Trainer Club account system;
                
                (iii) All apps published by Pokémon, whether for tablets, smart TVs, video game consoles, social media platforms, mobile devices or other platforms ("Apps"), unless otherwise indicated in the app;
                
                (iv) Pokémon Trading Card Game Live ("PTCGL");
                
                (v) All email newsletters published or distributed by Pokémon; and
                
                (vi) All other interactive features, services, and communications provided by Pokémon.
                
                2. THIS IS AN AGREEMENT BETWEEN YOU AND THE POKÉMON COMPANY INTERNATIONAL, INC. By accessing, downloading, or using the Service, you acknowledge that you have read, understood and agreed to these Terms. and any code of conduct that we may put forth from time to time. Where you are permitting a minor to use the Service, you are also agreeing that the minor will adhere to the Terms. Pokémon's Privacy Notice (www.pokemon.com/us/privacy-notice/) ("Privacy Notice"), explains Pokémon's collection, use, transmission and disclosure of your personal information provided by or collected from you. By agreeing to be bound by these Terms, you are also agreeing that you have read and understood the collection, use, transmission and disclosure of your personal information or data as described in the Privacy Notice (and as amended from time to time). You should review the Privacy Notice before using the Service.
                
                If you do not agree to these Terms, you may not access or use the Service. We may update and modify the Terms from time to time. Your continued use of the Service means that you have accepted those modifications.
                
                3. INTELLECTUAL PROPERTY, SERVICE CONTENT, AND USER SUBMISSIONS. Unless otherwise noted, all content on the Service, including articles, artwork, screen shots, graphics, logos, downloads and other files, is the property of Pokémon and is protected by United States and international copyrights, trademarks and other intellectual property laws. Trademarks and copyrights for third-party games and characters are owned by the companies which market or license those products. Because we receive thousands of such requests, our policy is to decline use of our trademarks and copyrights. Subject to any limitations under applicable law, you acknowledge and accept that you have no property or other rights in any content on the Service, including but not limited to content that you may have created or developed including "Trainer Images", screen names, game scores, the content of chats and other messages submitted to a Service or to us directly.
                
                All communications, solicited feedback, and other materials submitted to the Service (by email or otherwise) are non-confidential and non-proprietary. By submitting material to the Service and subject to any limitations under applicable law, you give up any claims that the use of that material violates any of your rights, including moral rights, privacy rights, proprietary rights, publicity rights, rights to credit for material or ideas or any other right, including the right to approve the way such material is used. Additionally, you grant us and any successors and assigns a perpetual, royalty-free, worldwide license to use, transmit, copy and display such submitted information and material in any and all media now known or hereinafter devised and represent that you have all necessary rights in such posting. No further consideration or compensation will be given for any materials or information (including but not restricted to creative, financial, business, commercial, etc.); submitted in any manner. It's also important to the success of a number of our Services that any errors or problems you discover are confidentially reported to Pokémon Customer Service directly so we can address them as quickly as possible. Visit Pokémon Support for information on how to contact us.
                
                Opinions, advice and all other information expressed by any third-parties on the Service represent their own views and not those of Pokémon. You should not rely on such opinions, advice or other information. Neither Pokémon nor any of its affiliates or their respective agents, directors, employees, information providers, licensors, licensees, officers and/or affiliates shall be responsible or liable for any decisions made based on such information.</p> <br> </br>
            <p>4. COPYRIGHT INFRINGEMENT CLAIMS. If you believe a portion of the Service infringes your copyright and you wish to file a copyright infringement notification with us, please visit http://www.pokemon.com/us/copyright/ for directions on submitting a copyright infringement notice to us.</p> <br> </br>
            <p>5. USER RIGHTS AND RESTRICTIONS. These Terms grant permission to you, in your individual capacity, to use the content of Service made available to you for personal, noncommercial home use only. In no instance may you:

                (i) Change or remove any copyright and other proprietary notices from content on the Service;
                
                (ii) Modify, or create derivative works based on, the content;
                
                (iii) Use, or facilitate the use of, any unauthorized third-party software (e.g. bots, mods, hacks, and scripts) to modify or automate operation within the Service whether for yourself or for a third party.
                
                (iv) Use the content in any manner: (a) suggesting an association with any other products, services, or brands (b) that is likely to cause confusion among customers, (c) that disparages or discredits Pokémon, (d) that is otherwise exploitative for any commercial purpose; or (e) that otherwise infringes our intellectual property rights;
                
                (v) Download quantities of content to a database for any reason;
                
                (vi) Decompose, disassemble, or reverse engineer any part of any Service, or otherwise use a Service for any purpose other than those provided for by us and in conjunction with the operations of the Service;
                
                (vii) Develop functionally similar products or services to any Service;
                
                (viii) Use any Service for the benefit of any third party or transfer access to the Services to any third party;
                
                (ix) Use the Service or content for commercial purposes, including, but not limited to: (a) selling access to all or part of the Service; or (b) placing advertising, sponsorships, or promotions on or within the Service or content;
                
                (x) Avoid, circumvent, or disable any security or digital rights management protocols or mechanism in any Service;
                
                (xi) Infiltrate any system used to operate the Service;
                
                (xii) Take any action to cause, or exploit, known or latent malfunctions, bugs or other defects in the Service or system used to operate the Service; or
                
                (xiii) Attempt to circumvent any restriction in any Service based upon age, geography, or other restriction imposed by us.
                
                Furthermore, you will comply with all applicable laws and legal obligations, including those pertaining to such areas as: copyright, trademark and other intellectual property laws, libel, slander, defamation, trade libel, product disparagement, harassment, invasion of privacy, tort, obscenity, indecency, and copyright or trademark infringement. Violations of applicable laws may give rise to civil and/or criminal prosecution and penalties.
                
                You acknowledge and agree that you are solely responsible for maintaining the confidentiality of your any account, login ID and password you use in connection with the Service, including by not reusing passwords you have used with the Service for any other account. You agree that Pokémon will not be responsible for any losses arising out of any unauthorized use of your Pokémon accounts.
                
                Notwithstanding anything to the contrary included in these Terms, we may at any time, with or without notice, suspend or terminate your access to some or all of the Service and refuse any and all current or future use of the Service at any time.</p> <br> </br>
            <p>6. CONDUCT AND COMMUNITY STANDARDS. You are prohibited from posting or transmitting any material to the Service that could: (i) interfere with anyone else's use of the Service; (ii) be considered abusive, illegal, indecent, obscene, offensive, or threatening in any way; (iii) encourage anyone to break the law; (iv) violate anyone's copyright or other property right; (v) interfere with the privacy of any other user; (vi) contain a virus or any other harmful component; or (vii) contain false or misleading statements of fact or descriptions of the origin of the material or the communication.

                Although we may from time to time monitor or review bulletin boards, chatrooms, discussions, postings, transmissions, and the like on the Service, we are under no obligation to do so, and assume no liability or responsibility arising from the contents of any such communications. We may change, edit, or remove any user material or conversations that we deem illegal, indecent, obscene, offensive, or otherwise violating our policies in any way. We will fully cooperate with any law enforcement authorities or court order requesting or directing us to disclose the identity of anyone posting such materials.</p> <br> </br>
            <p>7. PLAYER TRAINER CLUB ACCOUNTS. In order to access some features of the Service, you will need to create a Pokémon Trainer Club account ("PTC Account"). If you elect to create a PTC Account (Pokemon.com/Signup), use a PTC Account to sign up for other portions of the Service (such as PTCGL or Play! Pokémon), or authenticate your identity on third-party-operated services (such as Pokémon GO, Pokémon forums, and Pokémon's customer service portal), you agree to:

                (i) Provide true, accurate, current and complete information about yourself ("Profile Data").
                
                (ii) Maintain and promptly update the Profile Data to keep it accurate.
                
                (iii) Only maintain one PTC Account.
                
                (iv) Never use another person's PTC Account.
                
                (v) Bear full responsibility for the activity on your account and the security of your account credentials.
                
                We have the right to suspend or terminate your account, with or without notice, and refuse any and all current or future use of the Service due your violation of the Terms, or if we determine in our sole discretion that suspension or termination is in the best interest of supporting a fair, wholesome and safe environment for users of the Service (including participants in Play! Pokémon Program, PTCGL, or any other portion of the Service.)
                
                A Special Note Concerning Privacy and Children Online Parents may want their children to access this Service. Children can create a PTC Account using the ordinary process, with your permission solicited where appropriate</p> <br> </br>
            <p>8. CONTESTS; SWEEPSTAKES. This Service may refer to contests, sweepstakes or similar events (including without limitation Play! Pokémon Program championship events) that offer prizes or require you to send in material or information about yourself. Each contest, sweepstakes or other such event has its own rules, which you must read and agree to before you may enter.</p> <br> </br>
            <p>9. PLAY! POKÉMON PROGRAM. Because of the popularity of the Pokémon products, a large number of real-world Pokémon trading-card and videogame tournaments ("Play! Pokémon Events") may be occurring worldwide on any given day. While we do organize certain special events and championship events, most Play! Pokémon Events are organized or operated by independent third-party organizers, such as retailers of trading card games. While most Play! Pokémon Events are not run by us, we do post to the Service certain information we receive about Play! Pokémon Events from independent Play! Pokémon Event organizers. Such information includes event schedules and locations, and the names and rankings of PTC Account-holders who have selected the option in their Play! Pokémon settings to have this information posted to the Service. Information received from these independent. Play! Pokémon Event organizers allows us to create and post player rankings based on tournament results. Pokémon will use reasonable efforts to include accurate and up-to-date information on the Service, but Pokémon makes no representations or warranties of any kind about its accuracy, currency or completeness of information on the Service, including without limitation, tournament results and player ranking.</p> <br> </br>
            <p>10. THIRD-PARTY PRODUCTS AND SERVICES. The Service may contain links to third party websites, services and platforms that are not owned or controlled by us. We are not responsible for content on a site operated by a third party, including content on a site operated by a distributor who links to the Service with Pokémon's consent. Furthermore, we are not responsible for maintaining any materials referenced from another site, and makes no warranties for that site or this Service in such context. Additionally, certain features in the Service may require you to register certain information, including game ID number, 3rd party account information (like iTunes or Google Play account information), and/or use Nintendo™ hardware/software or Nintendo Network to participate in certain features of the Service. We are not responsible for any failure of such hardware, software, or services, including any damage to game data or game points, etc. For more information regarding Nintendo hardware and software, please visit Nintendo's website at www.nintendo.com.</p> <br> </br>
            <p>11. VIRTUAL CONTENT. We may, at various times, permit you to use "real world" money to buy Virtual Content. "Virtual Content" is a generic term for the products and services available to users free of charge, via code card redemption, or for purchase within the Service which may be used within the Service to access certain features, functions, and other Virtual Content. Virtual Content includes but is not limited to, virtual items like digital trading cards; deck sleeves; and coins; as well as in-Service Virtual Currency like Crystals and Credits ("Virtual Currency"). Certain features in the Services may be unavailable if not purchased.

                We may, from time to time, and at our sole discretion, provide opportunities for users to acquire certain Virtual Content free of charge, at reduced rates, or as bonus content when you acquire other Virtual Content or real world content such as certain physical Pokémon Trading Card products. You may only acquire Virtual Content in the amount and at times permitted by us in our sole discretion and may only purchase Virtual Content for your personal use within the Service. The inclusion of any Virtual Content at a particular time does not imply or warrant that the same Virtual Content will be available at any or all times. All features, content, capabilities, and specifications of Virtual Content described or depicted in the Service are subject to change at any time without notice.
                
                Virtual Content does not have monetary value, and may not be redeemed for legal currency, services, or items of value outside of the Services. Virtual Content obtained via the Service is provided to you under a limited, personal, revocable, non-transferable, non-sublicenseable license to use within the Service. You have no property interest; right or title in or to any Virtual Content appearing or originating in the service, and Virtual Content may not be transferred or resold in any manner not explicitly permitted by us. We may terminate your license to Virtual Content at any time and at our sole discretion.</p> <br> </br>
            <p>12. PURCHASING VIRTUAL CONTENT. For all charges for any Virtual Content sold on the Service, we, or payment processor acting on our behalf, will bill your credit card or alternative payment method. All prices for Virtual Content are displayed excluding taxes. You agree to pay all fees and applicable taxes incurred by you or anyone using an account registered to you. In the event that your credit card or alternative payment provider refuses to pay us for an amount credited to your account, we will have the right to delete the Virtual Content or the products or services purchased with such Virtual Content from your account. You agree that you will not cancel or reverse any charges for such Virtual Content or otherwise attempt to defraud us. In the event legal action is necessary to collect on balances due, you agree to reimburse us for all expenses incurred to recover sums due, including attorneys' fees and other legal expenses.

                ALL PURCHASES OF VIRTUAL CONTENT ARE NON-RETURNABLE AND NON-REFUNDABLE. If you redeem Virtual Currency to purchase in-game virtual items, you lose any statutory right of withdrawal because we begin performing our services upon your redemption of Virtual Currency for Virtual Content. If through some problem with your account or any other reason you lose Virtual Content and we can verify that you had it, we will make commercially reasonable efforts to replace them.
                
                YOU WILL NOT RECEIVE MONEY OR OTHER COMPENSATION FOR UNUSED VIRTUAL CONTENT WHEN AN ACCOUNT IS CLOSED, WHETHER SUCH CLOSURE WAS VOLUNTARY OR INVOLUNTARY. Certain jurisdictions may provide additional statutory rights, including a Cooling-Off Period which allows you to withdraw from a purchase. Nothing herein is meant to limit your return or cancellation rights for your purchase of Virtual Content under local law.</p> <br> </br>
            <p>13. UPDATES AND CHANGES TO THE SERVICE. We may, from time to time, issue patches or updates for portions of the Service which must be installed to continue using those portions of the Service. You consent to receive and install those patches and updates in order to continue using the Service. You also accept that all or portions of the Service may experience server issues that make it temporarily unavailable, and that we may in our sole discretion and without notice terminate all or any part of the Service. You accept that you will have no recourse of any kind against us even if this causes you to lose a match, to lose Virtual Content, or to have no further access to all or part of the Service.</p> <br> </br>
            <p>14. DISCLAIMER. THE SERVICE AND ALL CONTENT THEREIN ARE PROVIDED ON AN "AS IS" BASIS WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION WARRANTIES OF TITLE OR IMPLIED WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. BY USING THE SERVICE, YOUR ACKNOWLEDGE THAT YOUR USE OF THE SERVICE IS AT YOUR SOLE RISK, THAT YOU ASSUME FULL RESPONSIBILITY FOR ALL COSTS ASSOCIATED WITH ALL SERVICING OR REPAIRS OF ANY EQUIPMENT YOU USE IN CONNECTION WITH YOUR USE OF OUR SERVICE, AND THAT NEITHER POKÉMON NOR ANY OF ITS AFFILIATES OR THEIR RESPECTIVE AGENTS, DIRECTORS, EMPLOYEES, INFORMATION PROVIDERS, LICENSORS, LICENSEES, OFFICERS AND/OR AFFILIATES WILL BE LIABLE FOR ANY DAMAGES OF ANY KIND RELATED TO YOUR USE OF THIS SERVICE.

                UNDER NO CIRCUMSTANCES, INCLUDING BUT NOT LIMITED TO POKÉMON'S NEGLIGENCE, WILL POKÉMON OR ANY OF ITS AFFILIATES OR THEIR RESPECTIVE AGENTS, DIRECTORS, EMPLOYEES, INFORMATION PROVIDERS, LICENSORS, LICENSEES, OFFICERS AND/OR AFFILIATES BE LIABLE FOR ANY CONSEQUENTIAL, DIRECT, INCIDENTAL, INDIRECT, PUNITIVE, OR SPECIAL DAMAGES RELATED TO (A) THE USE OF, (B) THE INABILITY TO USE, OR (C) ERRORS OR OMISSIONS IN THE CONTENTS AND FUNCTIONS OF THIS SERVICE, EVEN IF POKÉMON OR AN AUTHORIZED REPRESENTATIVE THEREOF HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. SOME STATES DO NOT ALLOW THE EXCLUSION OR LIMITATION OF CONSEQUENTIAL OR INCIDENTAL DAMAGES, SO THE ABOVE LIMITATION OR EXCLUSION MAY NOT APPLY TO YOU. IN NO EVENT WILL THE TOTAL LIABILITY OF POKÉMON AND ITS AFFILIATES AND THEIR RESPECTIVE AGENTS, DIRECTORS, EMPLOYEES, INFORMATION PROVIDERS, LICENSORS, LICENSEES, OFFICERS AND/OR AFFILIATES TO YOU FOR ALL DAMAGES, LOSSES, AND CAUSES OF ACTION (WHETHER IN CONTRACT OR TORT) EXCEED $100.00.
                
                YOU UNDERSTAND THAT THE WARRANTY DISCLAIMERS AND LIABILITY AND REMEDY LIMITATIONS LISTED ABOVE ARE A CONDITION OF US MAKING THE SERVICE AVAILABLE TO YOU. WITHOUT THEM, WE WOULD NOT AND COULD NOT MAKE THE SERVICES AVAILABLE. You accept that if we discover that you have violated any portion of these Terms, we may take any step we deem appropriate including but not limited to terminating your PTC Account and access to the Services. You acknowledge that if that happens, you will not receive any reimbursement or other compensation for any items that may be associated with your account at the time of termination.</p> <br> </br>
            <p>15. INDEMNIFICATION. You agree to indemnify, defend, and hold Pokémon and its affiliates and their respective agents, directors, employees, information providers, licensors, licensees, officers and/or affiliates (collectively, "Indemnified Parties"), harmless from and against any and all liability and costs (including, without limitation, attorneys' fees and costs), incurred by the Indemnified Parties in connection with any claim arising out of any breach by you of these Terms or the foregoing representations, warranties, and covenants. You will cooperate as fully as reasonably required in the defense of any claim. Pokémon reserves the right, at its own expense, to assume the exclusive defense and control of any matter otherwise subject to indemnification by you and you will not in any event settle any matter without the written consent of Pokémon.</p> <br> </br>
            <p>16. GENERAL PROVISIONS. These Terms, our Privacy Notices, and any additional terms posted on this Service together constitute the entire agreement between Pokémon and you with respect to your use of this Service...</p> <br> </br>
            <label>
                <input type="checkbox" id="scroll-terms" name="scroll-terms" required>
                I agree to the terms and conditions
            </label>
        </div>
    </div>
</div>

<footer class="footer">
    &copy; 2023 Veji Company    
</footer>

<script src="../JS/script.js"></script>
</body>
</html>
