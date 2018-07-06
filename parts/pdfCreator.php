<div class="col-sm-12" style="color: white">
    <p style="text-align: center; font-size: 2em;font-weight: bold">Aanmeld formulier media college</p>
    <div class="row wow fadeInUp" style="background-color: rgba(0, 0, 0,.5); padding: 1em; text-align: center">
        <form method="post" action="parts/pdfGenerator.php" style="margin: 0 auto">
            <div class="form-group step1">
                <label>Naam leerling</label>
                <input type="text" name="naam" class="form-control" placeholder="Naam leerling"  >

                <label>Geboortedatum</label>
                <input type="date" class="form-control" name="geboortedatum" placeholder="Geboortedatum"  >
                <button type="button" name="next" class="btn btn-primary next1" style="margin-top: 1em">Next</button>

            </div>
<!--PAGE 2-->
            <div class="form-group step2" style="width: 100%">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="sel1">Opleiding:</label>
                            <select id="leerweg_select" name="opleiding" class="form-control">
                                <option value="0">VMBO</option>
                                <option value="1">HAVO</option>
                                <option value="2">VWO</option>
                                <option value="3">MBO</option>
                                <option value="4">Anders</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="leerweg_page col-sm-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Niveau: </label>
                                <select class="form-control" name="niveau"  >
                                <option selected disabled>Selecteer een niveau</option>
                                <option value="BB">BB</option>
                                <option value="KB">KB</option>
                                <option value="GL">GL</option>
                                <option value="TL">TL</option>
                                <option value="KB">KB</option>
                                <option value="LWT">LWT</option>
                                <option value="LWOO">LWOO</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Sector:</label>
                                <select class="form-control" name="sector"  >
                                    <option selected disabled>Selecteer een sector</option>
                                    <option value="Economie">Economie</option>
                                    <option value="Landbouw">Landbouw</option>
                                    <option value="Techniek">Techniek</option>
                                    <option value="Zorg & welzijn">Zorg & welzijn</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Heeft de leerling een keuzevak MVI gedaan?</label>
                                <select class="form-control" name="mvi"  >
                                    <option disabled selected>--</option>
                                    <option value="ja">Ja</option>
                                    <option value="nee">Nee</option>
                                </select>
                                <br>
                                <label> zo ja, welke: </label>
                                <input class="form-control" type="text" name="mviVak" placeholder="MVI keuzevak">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Diploma behaald / te behalen op:</label>
                                <input type="date" class="form-control" name="diploma-vmbo"  >
                            </div>
                        </div>
                    </div>

                        <button type="button" name="next" class="btn btn-danger back2" style="margin-top: 1em">Back</button>
                        <button type="button" name="next" class="btn btn-primary next2" style="margin-top: 1em">Next</button>
               </div>

                <div class="leerweg_page col-sm-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Diploma behaald / te behalen op:</label>
                                <input type="date" class="form-control" name="diploma-havo"   >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Overgangsbewijs van leerjaar </label>
                            <input class="form-control" type="text" name="overgangHavoVan"  >
                            <label>naar</label>
                            <input class="form-control" type="text" name="overgangHavoNaar"  >
                        </div>
                    </div>


                    <button type="button" name="next" class="btn btn-danger back2" style="margin-top: 1em">Back</button>
                    <button type="button" name="next" class="btn btn-primary next2" style="margin-top: 1em">Next</button>
                </div>

                <div class="leerweg_page col-sm-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>vwo Diploma behaald / te behalen op:</label>
                                <input type="date" class="form-control" name="diploma-vwo"  >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label> Overgangsbewijs van leerjaar </label>
                            <input class="form-control" type="text" name="overgangVwoVan"  >
                            <label> naar</label>
                            <input class="form-control" type="text" name="overgangVwoNaar"  >
                        </div>
                    </div>

                       <button type="button" name="next" class="btn btn-danger back2" style="margin-top: 1em">Back</button>
                      <button type="button" name="next" class="btn btn-primary next2" style="margin-top: 1em">Next</button>

                </div>

                <div class="leerweg_page">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Opleidingsniveau</label>
                                <select class="form-control" name="opleidingsniveau"  >
                                    <option selected disabled>Selecteer een niveau</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Leerweg</label>
                                <select name="leerweg" class="form-control"  >
                                    <option selected disabled>Selecteer een leerweg</option>
                                    <option value=BOL>BOL</option>
                                    <option value="BBL">BBL</option>
                                </select>
                            </div>
                        </div>
                    </div>
                        <button type="button" name="next" class="btn btn-danger back2" style="margin-top: 1em">Back</button>
                        <button type="button" name="next" class="btn btn-primary next2" style="margin-top: 1em">Next</button>
                </div>

                <div class="leerweg_page col-md-12">
                   <button type="button" name="next" class="btn btn-danger back2" style="margin-top: 1em">Back</button>
                    <button type="button" name="next" class="btn btn-primary next2" style="margin-top: 1em">Next</button>
                </div>
            </div>

            <div class="form-group step3" style="width: 100%">
                <div class="eigenschappen filled" id="next-eig">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <h3 class="text-center mb-50">indruk op school over de leerling</h3>

                            <div class="row" style="padding: 1em">
                                <div class="col-md-12">
                                    <div class="row">
                                        <h3>Werkhouding</h3>
                                    </div>
                                    <div class="row">
                                        <label>Concentratie</label>
                                        <select class="form-control" name="concentratie"  >
                                            <option selected disabled>--</option>
                                            <option value="goed">goed</option>
                                            <option value="Voldoende">Voldoende</option>
                                            <option value="Zwak">Zwak</option>
                                            <option value="Onvoldoende">Onvoldoende</option>
                                        </select>
                                        <label>Werktempo</label>
                                        <select class="form-control" name="werktempo"  >
                                            <option selected disabled>--</option>
                                            <option value="goed">goed</option>
                                            <option value="Voldoende">Voldoende</option>
                                            <option value="Zwak">Zwak</option>
                                            <option value="Onvoldoende">Onvoldoende</option>
                                        </select>
                                        <label>Zelfstandigwerken in de klas</label>
                                        <select class="form-control" name="werken"  >
                                            <option selected disabled>--</option>
                                            <option value="goed">goed</option>
                                            <option value="Voldoende">Voldoende</option>
                                            <option value="Zwak">Zwak</option>
                                            <option value="Onvoldoende">Onvoldoende</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding: 1em">
                                <div class="col-md-12">
                                    <div class="row">
                                        <h3>Instelling</h3>
                                    </div>
                                    <div class="row">
                                        <label>Motivatie</label>
                                        <select class="form-control" name="motivatie"  >
                                            <option selected disabled>--</option>
                                            <option value="goed">goed</option>
                                            <option value="Voldoende">Voldoende</option>
                                            <option value="Zwak">Zwak</option>
                                            <option value="Onvoldoende">Onvoldoende</option>
                                        </select>

                                        <label>Doorzettingsvermogen</label>
                                        <select class="form-control" name="doorzettingsvermogen"  >
                                            <option selected disabled>--</option>
                                            <option value="goed">goed</option>
                                            <option value="Voldoende">Voldoende</option>
                                            <option value="Zwak">Zwak</option>
                                            <option value="Onvoldoende">Onvoldoende</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding: 1em">
                                <div class="col-md-12">
                                    <div class="row">
                                        <h3>Vaardigheden</h3>
                                    </div>
                                    <div class="row">
                                        <label>Communicatieve</label>
                                        <select class="form-control" name="communicatieve"  >
                                            <option selected disabled>--</option>
                                            <option value="goed">goed</option>
                                            <option value="Voldoende">Voldoende</option>
                                            <option value="Zwak">Zwak</option>
                                            <option value="Onvoldoende">Onvoldoende</option>
                                        </select>

                                        <label>Sociale vaardigheden</label>
                                        <select class="form-control" name="sociale"  >
                                            <option selected disabled>--</option>
                                            <option value="goed">goed</option>
                                            <option value="Voldoende">Voldoende</option>
                                            <option value="Zwak">Zwak</option>
                                            <option value="Onvoldoende">Onvoldoende</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <button type="button" name="next" class="btn btn-danger back3" style="margin-top: 1em">Back</button>
                    <button type="button" name="next" class="btn btn-primary next3" style="margin-top: 1em">Next</button>
            </div>

            <div class="form-group step4" style="width: 100%">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Bijzonderheden</h3>
                        <div class="form-group">
                            <p>Heeft de leerling een aandoening en/of beperking die van invloed op de studie is of kan zijn?</p>
                            <input type="text" class="form-control" name="aandoening"  >
                        </div>
                        <div class="form-group">
                            <p>Volgt de leerling speciaal onderwijs?</p>
                            <select name="speciaal" class="form-control"  >
                                <option selected disabled>--</option>
                                <option value="ja">Ja</option>
                                <option value="nee">Nee</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <p>Heeft de leerling dyslexie?</p>
                            <select name="dyslexie" class="form-control"  >
                                <option selected disabled>--</option>
                                <option value="ja">Ja</option>
                                <option value="nee">Nee</option>
                            </select>                        </div>
                        <div class="form-group">
                            <p>Heeft de leerling dyscalculie?</p>
                            <select name="dyscalculie" class="form-control"  >
                                <option selected disabled>--</option>
                                <option value="ja">Ja</option>
                                <option value="nee">Nee</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <p>Is de leerling recent besproken in het extern zorg- en adviesteam (ZAT)?</p>
                            <select name="zat" class="form-control"  >
                                <option selected disabled>--</option>
                                <option value="ja">Ja</option>
                                <option value="nee">Nee</option>
                            </select>                          </div>
                        <div class="form-group">
                            <p>Ontvangt de leerling nog andere zorg?</p>
                            <select name="anders" class="form-control"  >
                                <option selected disabled>--</option>
                                <option value="ja">Ja</option>
                                <option value="nee">Nee</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <p>Zoja, welke zorg?</p>
                            <input class="form-control" type="text" name="andersValue" placeholder="Zorg"  >
                        </div>
                        <div class="form-group">
                            <p>Andere bijzondere persoonlijk omstandigheden waarvan de school op de hoogte moet zijn</p>
                            <input class="form-control" type="text" name="andersPersoonlijk"  >
                        </div>

                    </div>
                </div>

                    <button type="button" name="next" class="btn btn-danger back4" style="margin-top: 1em">Back</button>
                    <button type="button" name="next" class="btn btn-primary next4" style="margin-top: 1em">Next</button>


            </div>

            <div class="form-group step5" style="">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <h3>Uw gegevens</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="decaan">Uw naam</label>
                                    <input class="form-control" id="decaan" type="text" name="decaan" placeholder="Naam"  >
                                </div>
                                <div class="form-group">
                                    <label for="functie">Functie</label>
                                    <input class="form-control" id="functie" type="text" name="functie" placeholder="Functie"  >
                                </div>
                                <div class="form-group">
                                    <label for="school">Naam school</label>
                                    <input class="form-control" id="school" type="text" name="school" placeholder="School"  >
                                </div>
                                <div class="form-group">
                                    <label for="telefoon">Telefoon nummer</label>
                                    <input class="form-control" id="telefoon" type="text" name="telefoon" placeholder="Telefoon"  >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Geslacht</label>
                                    <select class="form-control" name="geslacht"  >
                                        <option selected disabled>selecteer een geslacht</option>
                                        <option value="man">man</option>
                                        <option value="vrouw">vrouw</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" id="email" type="email" name="email" placeholder="Email"  >
                                </div>
                                <div class="form-group">
                                    <label for="plaats">Plaats</label>
                                    <input class="form-control" id="plaats" type="text" name="plaats" placeholder="Plaats"  >
                                </div>
                                <div class="form-group">
                                    <label>Telefonisch contact gewenst</label>
                                    <select class="form-control" name="contact"  >
                                        <option selected disabled>--</option>
                                        <option value="ja">ja</option>
                                        <option value="nee">nee</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                            <button type="button" name="next" class="btn btn-danger back5">Back</button>
                            <button class="btn btn-primary" name="submit" type="submit">Submit</button>

                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
<?php

ini_set("display_errors", true);

error_reporting(E_ALL);
