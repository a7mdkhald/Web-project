<?php
session_start();
?>
<html>

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css%22%3E">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Story online shop</title>
    <link rel="stylesheet" href="checkout.css" />
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="Header.css" />
    <script src="checkout.js"></script>

</head>

<body>
    <section id="nav">
        <img id="img1" src="Title.webp" alt="Story_img">
        <div id="d1">
            <ul id="navbar">
                <li>
                    <div id="srch-bar">
                        <input id="bar" type="text" placeholder="search" />
                        <button type="button" id="srch" formaction="/submit"><img src="https://www.freeiconspng.com/thumbs/search-icon-png/search-icon-png-21.png" alt="search" width="10px" height="10px"></button>
                    </div>
                </li>
                <li><a href="home.php">Home</a></li>
                <li><a href="featured.php">Shopping</a>
                    <div id="sup-menu" class="dropdown">
                        <ul>
                            <li><a href="featured.php">featured</a></li>
                            <li><a href="categories.php">categories</a></li>
                        </ul>
                    </div>
                </li></a>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="profile.php"><img id="img2" src="user.png" />
                        <div id="sup-menu">
                            <ul>
                                <li><a id="a2" href="register.php">SignIn</li>
                    </a>
                <li><a id="a2" href="sign-up.php">SignUp</li></a>
            </ul>
        </div>
        </li></a>
        <li><a href="cart.php"><img id="img2" src="cart.webp" /></li></a>
        </ul>
        </div>
    </section>
    <?php
    if(isset($_SESSION['username'])){
        $_POST['add'] = 1;
    }
    ?>

    <section id="content">
        <div id="info" onload="defaultl()">
            <div id="selectors">
                <button id="conb" onclick="dispc()" onmouseover="dispdivc()" onmouseout="dispdivcr()"><strong>Contact Info</strong></button>
                <button id="add" onclick="dispa()" onmouseover="dispdiva()" onmouseout="dispdivar()"><strong>Shipping Address</strong></button>
                <button id="pay" onclick="dispp()" onmouseover="dispdivp()" onmouseout="dispdivpr()"><strong>Payment Method</strong></button>
                <button id="confirmb" onclick="dispco()" onmouseover="dispdivco()" onmouseout="dispdivcor()"><strong>Confirmation</strong></button>
                <div id="selhr"></div>
                <div id="consel"></div>
                <div id="addsel"></div>
                <div id="paysel"></div>
                <div id="confirmsel"></div>
            </div><br>
            <div id="cid">
                <form action="" id="cif">
                    <label for="fname"><strong>First Name</strong></label>
                    <input type="text" name="fname" id="fname" class="ifield" placeholder="First Name"> <br><br>

                    <label for="lname"><strong>Last Name</strong></label>
                    <input type="text" name="lname" id="lname" class="ifield" placeholder="Last Name"><br><br>

                    <label for="email"><strong>E-mail</strong></label>
                    <input type="email" name="email" id="email" class="ifield" placeholder="Email"><br><br>

                    <label for="phno"><strong>Phone No</strong></label>
                    <input type="text" name="phno" id="phno" class="ifield" placeholder="Phone No"><br><br>

                    <label for="mobno"><strong>Mobile No</strong></label>
                    <input type="text" name="mobno" id="mobno" class="ifield" placeholder="Mobile No"><br><br>
                    <input type="button" name="Next" id="next" value="Next" onclick="toadd()">
                </form>
            </div>
            <div id="sad">
                <form action="" id="sadd">
                    <label for="country"><strong>country</strong></label>
                    <select id="Country" name="country">
                        <option>select your country...</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Aland Islands">Åland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua & Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire, Sint Eustatius and Saba">Caribbean Netherlands</option>
                        <option value="Bosnia and Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo - Brazzaville</option>
                        <option value="Congo, Democratic Republic of the Congo">Congo - Kinshasa</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'Ivoire">Côte d’Ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curacao">Curaçao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czechia</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Islas Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernsey">Guernsey</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">Heard & McDonald Islands</option>
                        <option value="Holy See (Vatican City State)">Vatican City</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, Democratic People's Republic of">North Korea</option>
                        <option value="Korea, Republic of">South Korea</option>
                        <option value="Kosovo">Kosovo</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia, the Former Yugoslav Republic of">North Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia, Federated States of">Micronesia</option>
                        <option value="Moldova, Republic of">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar (Burma)</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Curaçao</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestinian Territory, Occupied">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn Islands</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Réunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russian Federation">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Barthelemy">St. Barthélemy</option>
                        <option value="Saint Helena">St. Helena</option>
                        <option value="Saint Kitts and Nevis">St. Kitts & Nevis</option>
                        <option value="Saint Lucia">St. Lucia</option>
                        <option value="Saint Martin">St. Martin</option>
                        <option value="Saint Pierre and Miquelon">St. Pierre & Miquelon</option>
                        <option value="Saint Vincent and the Grenadines">St. Vincent & Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">São Tomé & Príncipe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Serbia and Montenegro">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Sint Maarten">Sint Maarten</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and the South Sandwich Islands">South Georgia & South Sandwich Islands</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard & Jan Mayen</option>
                        <option value="Swaziland">Eswatini</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">Syria</option>
                        <option value="Taiwan, Province of China">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania, United Republic of">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-Leste">Timor-Leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks & Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">U.S. Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Vietnam</option>
                        <option value="Virgin Islands, British">British Virgin Islands</option>
                        <option value="Virgin Islands, U.s.">U.S. Virgin Islands</option>
                        <option value="Wallis and Futuna">Wallis & Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                    <br><br>

                    <label for="gov"><strong>Governorate</strong></label>
                    <input type="text" name="gov" id="gov" class="ifield" placeholder="enter your Governorate"><br><br>

                    <label for="pincode"><strong>Pin Code</strong></label>
                    <input type="text" name="pincode" id="pincode" class="ifield" placeholder="pincode"><br><br>

                    <label for="strname"><strong>Street Name</strong></label>
                    <input type="text" name="strname" id="strname" class="ifield" placeholder="street name"><br><br>

                    <label for="bfapt"><strong>Building/floor/appt</strong></label>
                    <input type="bfapt" name="bfapt" id="bfapt" class="ifield" placeholder="bld/flr/appt"><br><br>
                    <input type="button" name="Next" id="next" value="Next" onclick="topay()">
                </form>
            </div>
            <div id="pmd">
                <form action="" id="paymd">
                    <div id="crdt">
                        <input type="radio" onclick="enform()" id="paymc" class="crdt" name="paym" value="crdtcrd">
                        <label for="paymc" onclick="enform()" class="crdt">
                            <h5>Credit Card</h5>
                        </label>
                        <button disabled id="mcard"><img src="data:image/png;base64,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" alt="" height="30px" width="40px"></button>
                        <button disabled id="vcard"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAAAllBMVEX///8VNMwAIMkAJcq9xO6hqOXGzPEHLssUM8wAHskAKMoAJckAIclWaNeqsegAGsgAEcf5+v0ILsr29/yWoOMAAMXR1vPp7PnW2/Th5PfGzPB/jN7P1PMsRs/l6PhKXtRsetqwuOu2vuymruchPc4/U9FGWdNRZNU3TtElQc94hd1peNqOmOHw8vyFkd/c4PZ6htxfb9fUzEszAAAJDklEQVR4nO2ca1fCuhKGaQs0LYWWglxU5KpYFN3+/z93gJaSdzJBt1tt11nzLD+16SXTZDLzZrDREARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEIQK2U9HzWWvt2yOpuOq3+VfMF41bbT3V64jbVeD09FBW+e23WeunKxfnp0ojo64cZDOusP24MqT9vdw0yqNO7yJXQtBsh3ZLpveuJHWNM7yw6ubQCN2jOsmd1ns+alySlTqdwJv27IY4b0bADfDH+n292junuPI115ex09sr3YXQsOolx9+DZWjyj9/Qa5azeKQf5Tv3ay457RuDu8G9+z+WNe/xXj1sgksnUjYLjT6CpsHxfF5qh/1enDR7XMAp5H4gXlOM6avpbKf7fw36I/eFGsvlbLuZOVCq/AuPzzYwC1ifRb3d8kVUznphvNvzCt1OKP+OaNd6JnvFq25tk8+Nprmh98DMLSv9X+66Vwx1WEefjCP6UVmw6D5C33/BoN1FlFzsT7iPeLb9DwYLPPLFaPo2rA60OG84yNzUfj6Cz3/Hr2QvB/rI97QvZcfewfHz5PzwIQZs0hwaz7mPmYa6p+gavYzYq2Q8REBvv7sfBxdVlQuDvv0k3F1WEkYl/XhMw1V/Dsd/xYP5A2ZTw7uXTmdVnF8kMCV8fR8wZzrNZqAGcAPIds0fv+trn8DEkJ5LaPFFvuenBfMexxx53iiseSmk0qVFn+E/5gv8sovCREfzVTDCLtmRJaNKTYId+cTQ+hd6fb7G+qwUi+OVZZtOkkchadwnoRkJyx+jrNrZZC+KSNnIe7dnZxPoI8p17clDjhHBc/DUe6iBpPV3VMn8h3XnFsklrtYukYevtF4IbOMuF5izPSpPJGBGy+dHYb1TuqSeTRebmPfjH1tjk6F19Luv4aEggHJppvEM5VdfyDTs0iNx8RPh5OGwdR0jBPO0Z2ImRtUBvFJ1J3gQNHSlBUYuQwoiHHZ6JNhx6+FzAtVC2ZkFwd+4gHjAy2gRl9WLgxD7PUXV/69Tzyn9sjFp1f/ITvwFsShvmLfk4tC+MRLDv8QY00bX6Glr6xpS7+Hev6pjv4ES5hPkA8f3DuYxH8pz+wdlBzOnuUDx8gXcztdA0rnEO4qv05S9BTyYZw41L3fl2cmKDmUa1YXF0MVWuVX22OiXgNGp/bQGoD5IYTMGL2n2oxYg4n9cvIuiKdWQfvzN+hqj1HRHsOZjrl2Vgi6mfDtcmaKYUW0vJxaWCSHIc1aVLy7thVyeoy+IB+nOrowTvuqjCYEz7qHx3wNdFSMVS+R5y0J4I+WVJ+MDchPjwoQpJ0q/OkO/xf2EGkpTfElUYU25vY2yWGgzBxPudmyYWegbf8odUzIx7BKJHXy8CQKiMqOE/eeaFoXDiDlXs7cceGlimZ2fXitT/Z8Qj/rxnJrIi3nYHx5kb0xVU632iUYe+pq9LjDygcqeLLlLZBkuqfVc6E/uUbS8oE2DJMyQ3kIoNuwrFkkhyMtS5rnxztuSwfl5CJtAnmf3d2ojD44oPLd0L1f5OSGoUWgvtq17eyEHhdGgN0Ls0NerRzWyFUB+yrl6oMaDGioKDmQILv/aMuKVfzWoOD4LTZfB7C0fDFn+iNwDBUJIEYUjqdHSyg5qBnebvCISYHWMjKmFGSfZdwCYketpOXGPdilmFRdcEso797xkkPJi7ERX9qc7Ez2Iccsw154gLbLVgMwK84n3BgjqQS0FtwP7ZiS07pj2+KJsOcoJ5e7ITB0L/JsLYBRnytImLekj3pzm+Sg8fBkG1wxePln7cnqsu69o4f/LGH6UzAZOxkG3TsGhlRyYFerVeZy5lLK1++U6HbXohNYQYI6Scu4Iaa8AY29FFa9EMlha7nremMUUxyJtFm70BMb/Skw1uslLaObPU4rEnViEL1A32/1v/11yMTzWqq+B6vriwgskkTrrhqwzeFDPqDe4GIuqyySA8MwND19XN4NHWOizTYIXNTmp/v7n4CJdfjC2AuyaYCSg7oeM+4/jLKriwPMdKvDIoJbakmdNg9x9Tks1Th2YlR2iWblWu55ZkiTxc65ZA5lDf/ltlmWKTc3+ql6ScsNfWSpDKMfGqG/WiUHnhbZmi9lBNSGHF+riMbh6FVZtWyCPnuGpVdEursiOfCQmr6ziviOce8VtG2lOoA1j1jf4KDHwKWTreIjrFGHCAvzsjohCx3bFTO15b4oJ5+a8lUOV1iRSZWHTQNLgTlHXKsYvjGzvbmiNetEcvjCjjHZ13bzQH1t/z4GdalaLrCWZhhCpVVymNrWLLKJUQwTWs96jbBeHn7FVKHnXaPy5qPthxXrmzkbn77gdyj2aplNMzupLaWqhr1FOjei572ySQ4LP3XV2z1Jq0dUOC0ih+6ndbrwFrWSltmafYcpybVVOeRyiwrj7KPVnuZ960/W84AaJd9SG385bjgR1UpatizkyqfrUAsLb7WsuBibqe+5cZxussyJ447xCQof+PbluCE3Vq2kZbqlWmAm/C82yeF8g3yWKqWYzWnnPEZIsOb4JmBmGr9UzICdF2bpXorR/eWLGzUhLG7usZaYAqlt1wAkLZRqq4dbyn2jshokB6VvU22/EgqExQ3RQ7IF3GOIw5Lf6vb3eGW8iBkMtjHEuEgO5q8FGPws9/zk5xkuWziSUUWyRjCBD1PuY5Uc3i1l/zrhrFgu0PFZit0huKDZfMXsTYfMSCNdm+SwtEW1F4JtYRRSsWQRFcAJ1kxaZn7lYCbJdsnhUw3Bj0rLkrXAIly09bFaNw9vLGeh+cXtksPmun8Pg48yIafuzePfZw8FgFGtpGXzt6SJWWq8tFY5DJ2Y/jD2Miy85EO7FwnprNtD+g5s3aTlvhd5OgEz8hex3iKGoTd5nbtBJ0zxv16kYRTMW5AHPAbwnMS20MHDklpVLTcaqx6wZmrYey2AthjcrhePmR/EQeRFURQEfjZ/a5KMaT/Em1itcAut6iVp/RT98XTUXB3/U8/9dFwvtUAQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEH4v+N/rEKNHJdMYsYAAAAASUVORK5CYII=" alt="" height="30px" width="40px"></button>
                        <button disabled id="aex"><img src="data:image/png;base64,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" alt="" height="30px" width="40px"></button>
                        <p id="ci">Safe Money Transfer Using Your Bank Account</p>
                        <hr>
                        <br><br>
                    </div>
                    <div id="coddiv">
                        <input type="radio" onclick="enform()" id="paym" name="paym" value="cod">
                        <label for="paym" onclick="enform()">
                            <h5>COD</h5>
                        </label><br>
                        <p id="coi">You can pay for Cash on Delivery orders using cash at the time of delivery</p>
                    </div>
                    <input type="button" name="Next" id="nextc" value="Next" onclick="tocon()">
                </form>
            </div>
            <div id="crdform">
                <label for="cardname">Name On Card</label>
                <input disabled type="text" name="cardname" id="cardname" placeholder="Name"><br><br>
                <label for="cardno">Card Number</label>
                <input disabled type="text" name="cardno" id="cardno" size="25">
                <label id="exl" for="expd">Expiry Date</label>
                <input disabled type="text" name="expd" id="expd" placeholder="MM/YY" size="10">

                <label id="cvv" for="cvv">CVV</label>
                <input disabled type="text" name="cvv" id="cvv" placeholder="000" size="3">
            </div>
            <div id="confirmation">
                <p><span class="head">Full Name:</span> fares kataya</p>
                <br>
                <p><span class="head">E-mail:</span> farestyk@gmail.com</p>
                <br>
                <p><span class="head">Phone Number:</span> 01145589659</p>
                <br>
                <p><span class="head">Mobile Number:</span> 035755589</p>
                <br>
                <p><span class="head">Full Address:</span> egypt/alexandria/riad.st/floor 10/apt 19</p>
                <br>
                <p><span class="head">Payment Method:</span> Cash On Delivery</p>
                <br>
                <p></p>
                <p></p>
                <p></p>
            </div>
        </div>
        <?php
$names = array();
$prices = array(); 
        for ($i = 1; $i <= 10; $i++) {
            $namstr = "name" . $i;
            $pristr = "price" . $i;
            if (isset($_SESSION[$namstr])) {
                $names[$i] = $_SESSION[$namstr];
                $prices[$i] = $_SESSION[$pristr];

            }
        }
?>
        <div id="summary">
            <h4>order summary</h4>
            <button id="edit"><a href="cart.php">Edit</a></button>
            <div id="libr">
                <h4 id="it">items</h4>
                <br>
                <div id="ite">
                    
                    <?php
                    for($i = 1; $i <= 10; $i++){
                        if(isset($names[$i])){
                            echo'<p? style="color:white;">'.$names[$i].'</p>';
                        }
                    }
                    ?>
                </div>
                
<<<<<<< Updated upstream
                <div id="price"><?php
                $subtotal = 0;
                    for($i = 1; $i <= 10; $i++){
                        if(isset($prices[$i])){
                             echo'<p style="color:white; left:200px; top:43px;" >'.$prices[$i].'.00$</p>';
                              $subtotal = $prices[$i] + $subtotal;
=======
                <div id="price" style="left: 200px; top:-82px;"><?php
                $subtotal = 0;
                    for($i = 1; $i <= 10; $i++){
                        if(isset($prices[$i])){
                            echo'<p? style="color:white;">'.$prices[$i].'.00$</p>';
                        $subtotal = $prices[$i] + $subtotal;
>>>>>>> Stashed changes
                        }
                    }
                    ?>
                </div>
                <div id="det">
                    <p class="it">Subtotal</p>
                    <p class="it">Taxes & Fees</p>
                    <p class="it">Shipping</p>
                    <p class="it">Discount</p>
                </div>
                <hr>
                <div id="price2">
                    <p class="price"><?php echo $subtotal.".00$" ?></p>
                    <p class="price">200.00$</p>
                    <p class="price">200.00$</p>
                    <p class="price">0.00$</p>
                </div>
                <div id="subsec">
                    <h4>Total: <h3>0.00$</h3>
                    </h4>
                </div>
                <form action="">
                    <input type="text" id="disc" name="disc" placeholder="Enter Discount Code">
                    <input type="submit" name="apply" id="apply" value="apply">
                </form>
                <button id="place">Place Your Order</button>
            </div>
        </div>
    </section>

    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <img id="imga1" src="Title.webp" alt="Story_img" width="150px">
                <p id="pd1">Trusted by millions of businesses worldwide
                    Shopify handles everything from marketing and payments, to secure checkout and shipping
                    Brands that use Shopify</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                <h5 class="pb-2">contact us</h5>
                <div>
                    <h6 class="text-uppercase">address</h6>
                    <p>123 STREET NAME, CITY, EG </p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>(123) 456 789</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>MAIL@EXAMPLE.COM</p>
                </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2">Founders</h5>
                <div class="row">
                    <ul>
                        <li>Omar Hashim</li>
                        <li>Ahmed Khalid</li>
                        <li>Fares Tarek</li>
                    </ul>
                </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2">instagram</h5>
                <div class="row">
                    <img class="img-fluid w-25 h-100 m-2" src="https://i.pinimg.com/originals/b9/a9/a4/b9a9a4f3dab5cd9beb5d7c8d91b84445.jpg">
                    <img class="img-fluid w-25 h-100 m-2" src="https://i.pinimg.com/originals/a9/03/49/a90349617102cf2d7fa7aa6f0515efed.jpg">
                    <img class="img-fluid w-25 h-100 m-2" src="https://images.squarespace-cdn.com/content/v1/547a3834e4b053a861c4874e/1624219205079-2MV5PECBTTNFHIIYC8SX/Sustainably+Chic+%7C+Sustainable+Fashion+Blog+%7C+Sustainable+and+Ethical+Clothing+Brands+for+Men.jpg?format=1000w">
                    <img class="img-fluid w-25 h-100 m-2" src="https://nextluxury.com/wp-content/uploads/fashion-mens-trendy-outfits.jpg">
                    <img class="img-fluid w-25 h-100 m-2" src="https://nextluxury.com/wp-content/uploads/mens-clothing-trendy-outfits-styles-navy-dress-shirt.jpg">
                </div>
            </div>
        </div>
        <div class="copyright mt-5 ">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <img class="img-fluid w-50 h-125 m-2" src="https://i.ytimg.com/vi/i09C02151PI/maxresdefault.jpg">
                </div>
                <div class="col-lg-4 col-md-6 col-12 text-nowrap mb-2">
                    <p id="st1">story online shopping 2022. all right reserved</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-invision fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-snapchat fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
            </div>
        </div>

    </footer>
</body>

</html>