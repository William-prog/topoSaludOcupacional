<div class="card-header header">
    <h2 style="text-align:center;"> <strong> Daño </strong> </h2>
</div>

<div class="headingcontainer">
    <div class="heading3">
        <h3 id="colorLesion">Lesión</h3>
    </div>
</div>

<div class="row mt-2">
    <div class="form-group col">
        <div class="form-group">
            <label for="form4TipoIncapacidad">Tipo de incapacidad o consecuencia:</label>
            <select name="form4TipoIncapacidad" id="form4TipoIncapacidad" class="form-control">
                <option {{ isset($registroAccidente->form4TipoIncapacidad) == '' ? 'selected' : '' }} value="">Seleccionar..</option>
                <option {{ isset($registroAccidente->form4TipoIncapacidad) == 'Temporal' ? 'selected' : '' }} value="Temporal">Temporal</option>
                <option {{ isset($registroAccidente->form4TipoIncapacidad) == 'Parcial permanente' ? 'selected' : '' }} value="Parcial permanente">Parcial permanente</option>
                <option {{ isset($registroAccidente->form4TipoIncapacidad) == 'Total permanente' ? 'selected' : '' }} value="Total permanente">Total permanente</option>
                <option {{ isset($registroAccidente->form4TipoIncapacidad) == 'Muerte' ? 'selected' : '' }} value="Muerte">Muerte</option>
                <option {{ isset($registroAccidente->form4TipoIncapacidad) == 'Sin incapacidad' ? 'selected' : '' }} value="Sin incapacidad">Sin incapacidad</option>
                <option {{ isset($registroAccidente->form4TipoIncapacidad) == 'No especificado' ? 'selected' : '' }} value="No especificado">No especificado</option>
            </select>
        </div>
    </div>
    <div class="form-group col">

    </div>
</div>
<div class="row mt-2">
    <div class="form-group col">
        <div class="form-group">
            <label for="form4DiagnosticoInicial">Diagnóstico inicial: </label>
            <textarea name="form4DiagnosticoInicial" id="form4DiagnosticoInicial" class="form-control" rows="3">
            {{isset($registroAccidente->form4DiagnosticoInicial)?$registroAccidente->form4DiagnosticoInicial:''}}
            </textarea>
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="form-group col">
        <div class="form-group">
            <label for="form4TratamientoInicial">Tratamiento inicial: </label>
            <textarea name="form4TratamientoInicial" id="form4TratamientoInicial" class="form-control" rows="3">
            {{isset($registroAccidente->form4TratamientoInicial)?$registroAccidente->form4TratamientoInicial:''}}
            </textarea>
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="form-group col">
        <div class="form-group">
            <label for="form4DiagnosticoDependencia">Diagnóstico emitido por la dependencia /Medico/Naturaleza de la lesión: </label>
            <textarea name="form4DiagnosticoDependencia" id="form4DiagnosticoDependencia" class="form-control" rows="4">
            {{isset($registroAccidente->form4DiagnosticoDependencia)?$registroAccidente->form4DiagnosticoDependencia:''}}
            </textarea>
        </div>
    </div>
    <div class="form-group col">
        <div class="form-group">
            <label for="form4TratamientoDependencia">Tratamiento emitido por la dependencia /Medico: </label>
            <textarea name="form4TratamientoDependencia" id="form4TratamientoDependencia" class="form-control" rows="4">
            {{isset($registroAccidente->form4TratamientoDependencia)?$registroAccidente->form4TratamientoDependencia:''}}
            </textarea>
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="form-group col">
        <div class="form-group">
            <label for="form4DiasIncapacidad"> Días de incapacidad: </label>
            <input name="form4DiasIncapacidad" id="form4DiasIncapacidad" class="form-control" type="number" value="{{isset($registroAccidente->form4DiasIncapacidad)?$registroAccidente->form4DiasIncapacidad:''}}">
        </div>
    </div>
    <div class="form-group col">
        <div class="form-group">
            <label for="form4ImporteCuracion"> Importe estimado de la curación: </label>
            <input name="form4ImporteCuracion" id="form4ImporteCuracion" class="form-control" type="number" value="{{isset($registroAccidente->form4ImporteCuracion)?$registroAccidente->form4ImporteCuracion:''}}">
        </div>
    </div>
</div>

<br>

<div class="form-group">
    <div class="row mt-2">
        <div class="form-group col-3">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>
            <svg @click="part_clicked" xmlns="" width="340" height="430" viewBox="0 0 68.587668 100">
                <path fill="#000" onclick="Body('Cabeza')" id="head" style="opacity:1" d="m 11.671635,6.3585449 -0.0482,-2.59085 4.20648,-2.46806 4.42769,2.95361 -0.0405,1.94408 0.24197,-3.34467 -2.03129,-2.31103004 -2.84508,-0.51629 -2.20423,0.52915 -1.9363,2.63077004 z" />
                <path fill="#000" onclick="Body('Cabeza')" id="face" style="opacity:1" d="m 19.748825,6.7034949 0.0203,-2.20747 -3.96689,-2.7637 -3.74099,2.23559 -0.006,2.63528 -0.60741,0.0403 0.27408,1.82447 0.97635,0.33932 0.44244,2.1802901 1.82222,2.06556 2.03518,-0.0607 1.79223,-1.94408 0.35957,-2.2406601 0.97616,-0.33932 0.25159,-1.78416 z" />

                <path fill="#000" onclick="Body('Cuello')" id="neck" style="opacity:1" d="m 13.304665,11.910505 1.64975,2.35202 0.74426,2.62159 -1.73486,-1.38354 -0.86649,-2.97104 z m 5.08047,0 -1.64975,2.35202 -0.74538,2.62234 1.73486,-1.38354 0.86649,-2.97104 z" />

                <path fill="#000" onclick="Body('Hombro')" id="shoulderLeft" style="opacity:1" d="m 19.047795,13.248365 3.55748,1.97916 0.72653,-0.35074 z m -0.107,0.43288 -0.37119,1.73073 2.1846,0.53561 1.40116,-0.49436 z m 3.98151,1.97595 0.75814,-0.41 2.40806,1.66799 1.17364,1.50707 0.62662,1.5626 -0.0464,3.70194 -1.3284,-1.72153 0.0407,-2.59376 -0.48842,-0.50049 c 0,0 -3.09778,-3.19058 -3.14371,-3.21401 z m -0.2409,0.10873 c -0.001,0.0525 3.32987,3.54733 3.32987,3.54733 l 0.10067,3.10396 -1.15426,-1.97782 -2.22547,-0.94804 -1.56576,-2.88481 z" />
                <path fill="#000" onclick="Body('Hombro')" id="shoulderRight" style="opacity:1" d="m 12.624785,13.248365 -3.5574599,1.97916 -0.72653,-0.35074 z m 0.107,0.43288 0.37119,1.73073 -2.18459,0.53561 -1.4011499,-0.49436 z m -3.9814899,1.97595 -0.75814,-0.41 -2.40806,1.66799 -1.17364,1.50707 -0.62662,1.56259 0.0464,3.70195 1.3284,-1.72153 -0.0407,-2.59376 0.48843,-0.5005 c 0,0 3.09777,-3.19057 3.1437,-3.214 z m 0.2409,0.10873 c 0.002,0.0525 -3.32987,3.54733 -3.32987,3.54733 l -0.10067,3.10396 1.15426,-1.97782 2.22547,-0.94804 1.5657499,-2.88481 z" />

                <path fill="#000" onclick="Body('Brazo Izquierdo')" id="armLeft" style="opacity:1" d="m 27.621665,30.814715 -0.33838,1.70499 -1.81932,-2.54418 -0.6629,-1.26895 z m -2.85271,-2.6096 c -0.0259,-0.0144 -0.0536,-0.0254 -0.0824,-0.0324 l -1.48333,-4.95503 1.00456,-2.08428 1.65511,1.74532 2.23034,6.67667 0.0415,0.93739 c -1.06528,-0.84215 -2.18962,-1.60679 -3.36434,-2.28803 z m 1.6945,-5.75654 1.64893,6.43421 -0.36469,-4.92266 z" />
                <path fill="#000" onclick="Body('Brazo Izquierdo')" id="forearmLeft" style="opacity:1" d="m 26.955425,32.969125 1.30083,10.28927 -1.10778,0.01 -1.89387,-7.99609 0.19174,-4.53719 z m 1.21978,-1.94971 -0.58729,2.58635 1.11876,9.15614 0.55849,-0.21663 0.2304,-6.77018 z" />
                <path fill="#000" onclick="Body('Brazo Izquierdo')" id="elbowLeft" style="opacity:1" d="m 28.325215,27.370125 -0.005,3.09419 0.57959,1.91184 0.54538,-2.41185 z" />

                <path fill="#000" onclick="Body('Brazo Derecho')" id="armRight" style="opacity:1" d="m 4.0746451,30.814715 0.33838,1.70499 1.81931,-2.54418 0.66289,-1.26895 z m 2.8527,-2.6096 c 0.0259,-0.0144 0.0536,-0.0254 0.0824,-0.0324 l 1.48332,-4.95503 -1.00455,-2.08428 -1.65509,1.74532 -2.23034,6.67667 -0.0415,0.93739 c 1.06528,-0.84215 2.18961,-1.60679 3.36433,-2.28803 z m -1.6945,-5.75654 -1.64891,6.43421 0.36468,-4.92266 z" />
                <path fill="#000" onclick="Body('Brazo Derecho')" id="forearmRight" style="opacity:1" d="m 4.5752651,32.969125 -1.30083,10.28927 1.10778,0.01 1.89387,-7.99609 -0.19174,-4.53719 z m -1.21978,-1.94971 0.58728,2.58635 -1.11875,9.15614 -0.55849,-0.21663 -0.2304,-6.77018 z" />
                <path fill="#000" onclick="Body('Brazo Derecho')" id="elbowRight" style="opacity:1" d="m 3.2054751,27.370125 0.005,3.09419 -0.57959,1.91184 -0.54539,-2.41185 z" />

                <path fill="#000" onclick="Body('Pecho')" id="chestLeft" style="opacity:1" d="m 20.337455,17.085495 1.72942,3.09103 1.89346,0.94785 -1.15295,0.90662 -0.90604,2.63773 -2.09968,0.86537 -3.34524,-1.655 0.83425,-6.50527 z" />
                <path fill="#000" onclick="Body('Pecho')" id="chestRight" style="opacity:1" d="m 11.351215,17.085495 -1.7294199,3.09103 -1.89346,0.94785 1.15295,0.90662 0.90586,2.63773 2.0996699,0.86537 3.34636,-1.655 -0.83462,-6.50527 z" />

                <path fill="#000" onclick="Body('Costillas')" id="ribsLeft" style="opacity:1" d="m 19.288925,26.151995 -3.11202,-1.40604 0.0937,2.27965 2.80119,1.43603 z m 1.93471,1.66849 -1.29355,0.7212 0.14997,-1.70898 z m -1.05303,-1.63718 2.47968,-1.03241 -0.9336,2.52093 z m 1.53164,1.73729 -1.69005,1.03372 -0.28871,2.0678 1.64975,-1.07533 z m -2.91143,1.10421 -0.0622,1.62387 -2.30308,-0.49961 -0.12448,-2.21722 z m -0.1556,2.4045 0.0311,1.99844 -2.20953,0.59391 -0.0311,-3.1227 z m 2.65459,-0.98535 -1.48383,1.03372 -0.20622,2.10905 1.64862,-1.32355 z" />
                <path fill="#000" onclick="Body('Costillas')" id="ribsRight" style="opacity:1" d="m 12.399365,26.152365 3.11202,-1.40603 -0.0937,2.27965 -2.80138,1.4364 z m -1.93508,1.6685 1.29355,0.72139 -0.14997,-1.70899 z m 1.05303,-1.637 -2.4793099,-1.03259 0.93361,2.52148 z m -1.5316399,1.73729 1.6900499,1.03372 0.28871,2.06743 -1.64881,-1.07515 z m 2.9114199,1.10421 0.0623,1.62387 2.30327,-0.49961 0.12448,-2.21703 z m 0.15561,2.40432 -0.0309,1.99844 2.20973,0.59353 0.0311,-3.1227 z m -2.6546,-0.98516 1.48384,1.0339 0.20622,2.10905 -1.64975,-1.32355 z" />

                <path fill="#000" onclick="Body('Estomago')" id="bellyLeft" style="opacity:1" d="m 19.641935,34.707615 1.81341,-1.36479 0.15748,1.83347 1.28642,2.37338 -1.98044,2.73652 -1.03109,0.16554 -0.37026,-3.88816 z" />
                <path fill="#000" onclick="Body('Estomago')" id="bellyRight" style="opacity:1" d="m 12.045985,34.707615 -1.81341,-1.36479 -0.15748,1.83347 -1.2856799,2.37432 1.9804499,2.73595 1.03109,0.16554 0.37119,-3.88721 z" />
                <path fill="#000" onclick="Body('Estomago')" id="belly" style="opacity:1" d="m 15.636055,44.919735 -0.60647,-5.91209 -0.015,-3.84879 -2.18479,-1.07533 -0.24746,7.03017 z m 0.41581,-5.7e-4 0.60628,-5.91209 0.0154,-3.84915 2.18404,-1.07515 0.24746,7.03017 z" />

                <path fill="#000" onclick="Body('Pierna Izquierdo')" id="thighLeft" style="opacity:1" d="m 23.419015,50.399125 -0.15504,4.75091 -2.40263,6.60949 0.7362,1.90021 2.36401,-8.34435 z m -0.58154,-11.60825 -0.15485,4.00722 1.31793,7.93154 0.61977,-6.40308 z m -0.38731,5.12268 -2.75152,6.07258 -0.62015,4.87425 1.16232,6.85771 2.51886,-6.98144 0.15504,-7.18764 z" />
                <path fill="#000" onclick="Body('Pierna Izquierdo')" id="innerthighLeft" style="opacity:1" d="m 22.063225,39.369605 v 4.21363 l -2.94574,5.82511 -1.86027,5.78349 0.19365,-4.0072 z m -3.24944,13.42596 -0.0649,0.15467 -1.21294,2.90207 0.78325,7.18803 1.23619,-0.66122 -1.0714,-6.69272 z" />
                <path fill="#000" onclick="Body('Pierna Izquierdo')" id="calfLeft" style="opacity:1" d="m 18.251375,70.441125 0.29058,0.91486 0.6224,3.8681 0.0829,5.15733 -0.87136,5.03304 0.0412,-6.44714 -0.91242,-2.57848 -0.12561,-2.82837 z m 1.9915,2.32915 -0.20753,7.73637 -1.65949,6.23904 1.80478,-0.853 3.00816,-10.83583 -1.03727,-6.82095 z" />
                <path fill="#000" onclick="Body('Pierna Izquierdo')" id="kneeLeft" style="opacity:1" d="m 21.404635,64.784375 0.1243,1.12295 -0.87118,1.08171 -0.29058,1.70599 -0.58116,0.24933 -0.49774,-2.57866 -0.33182,-0.91486 0.29058,-0.58247 z m -3.85853,0.0832 0.6224,1.74685 1.3273,2.57867 -0.33182,2.37095 -0.95423,-2.66209 -0.78738,-1.49734 z m 4.97811,-2.37039 -0.95423,5.11609 0.62241,-0.33295 0.49773,1.66381 z" />

                <path fill="#000" onclick="Body('Pie Izquierdo')" id="feetLeft" style="opacity:1" d="m 17.255895,87.868445 0.1243,3.45228 0.28983,1.20638 h 0.87136 l 0.24897,-0.83181 0.29058,-0.0416 -0.0624,0.83181 1.09914,-0.33332 0.29058,-0.16629 1.24444,-0.27033 0.0416,-0.97748 -1.20319,-2.03743 -0.82974,-1.0399 -2.03294,-0.83181 z" />
                <path fill="#000" onclick="Body('Pie Derecho')" id="rightFeet" style="opacity:1" d="m 14.433335,87.868265 -0.12448,3.45228 -0.29058,1.20637 h -0.87118 l -0.24877,-0.83181 -0.29059,-0.0416 0.0623,0.83181 -1.09934,-0.33333 -0.29058,-0.16629 -1.2448,-0.27033 -0.0412,-0.97747 1.2031899,-2.03781 0.82975,-1.04009 2.03294,-0.83181 z" />

                <path fill="#000" onclick="Body('Area Genital')" id="genitalia" style="opacity:1" d="m 14.404465,45.040075 0.0221,-0.0277 -0.14866,-0.37945 -3.10172,-3.40449 -0.23283,-0.0825 2.05918,5.32009 z m -1.17263,2.01833 1.27705,3.29948 0.42631,-4.04862 -0.25196,-0.64303 z m 4.05219,-2.01795 -0.0221,-0.0281 0.14867,-0.37926 3.10171,-3.40449 0.23246,-0.0825 -2.05843,5.3199 z m 1.17263,2.01795 -1.27706,3.29948 -0.42631,-4.04843 0.25197,-0.64303 z" />

                <path fill="#000" onclick="Body('Pierna Derecha')" id="thighRight" style="opacity:1" d="m 8.2694651,50.399125 0.15504,4.75053 2.4026299,6.60968 -0.73638,1.90021 -2.3640099,-8.34435 z m 0.58117,-11.60768 0.15503,4.00684 -1.31754,7.93154 -0.61978,-6.40308 z m 0.38769,5.1223 2.7515099,6.07239 0.61997,4.87425 -1.16232,6.85771 -2.5190499,-6.98163 -0.15504,-7.18801 z" />
                <path fill="#000" onclick="Body('Pierna Derecha')" id="innerthighRight" style="opacity:1" d="m 9.6258251,39.369415 v 4.21363 l 2.9451699,5.8253 1.86028,5.78349 -0.19366,-4.0072 z m 3.2488699,13.42559 0.0647,0.15485 1.21294,2.90207 -0.78307,7.18803 -1.23618,-0.66102 1.0714,-6.69273 z" />
                <path fill="#000" onclick="Body('Pierna Derecha')" id="calfRight" style="opacity:1" d="m 13.437675,70.440945 -0.29058,0.91486 -0.62241,3.86828 -0.0829,5.15733 0.87174,5.03304 -0.0418,-6.44714 0.91298,-2.57848 0.1243,-2.82837 z m -1.99151,2.32914 0.20735,7.73637 1.65968,6.23904 -1.80497,-0.85299 -3.0079799,-10.83584 1.03728,-6.82095 z" />
                <path fill="#000" onclick="Body('Pierna Derecha')" id="kneeRight" style="opacity:1" d="m 10.284405,64.784375 -0.12448,1.12295 0.87118,1.08171 0.29058,1.70599 0.58116,0.24933 0.49774,-2.57866 0.33182,-0.91486 -0.29058,-0.58247 z m 3.85854,0.0832 -0.62241,1.74685 -1.32767,2.57867 0.33182,2.37095 0.95423,-2.66209 0.78832,-1.4964 z m -4.9786799,-2.37058 0.9542299,5.11609 -0.6223999,-0.33313 -0.49793,1.6638 z" />

                <path fill="#000" onclick="Body('Mano Derecha')" id="handRight" style="opacity:1" d="m 4.3904451,43.563145 -1.5198,0.0506 -0.76631,-0.67112 -1.21261996,2.15767 -0.86245,3.32873 0.49386,0.22113 0.59814996,-2.20238 0.50016,0.25356 -0.35639,2.49422 0.62382,0.24345 0.41402,-2.49194 0.55839,0.17851 -0.2262,2.76603 0.76938,0.32268 0.25788,-2.86764 0.4578,-0.0181 0.16611,2.65239 0.65997,0.2633 0.0712,-4.56643 0.34158,-0.19428 1.35316,1.68367 0.32832,-0.34354 -0.72644,-2.0551 z" />
                <path fill="#000" onclick="Body('Mano Izquierda')" id="handsLeft" style="opacity:1" d="m 27.140245,43.563145 1.5198,0.0506 0.76631,-0.67111 1.21262,2.15766 0.86245,3.32873 -0.49386,0.22113 -0.59815,-2.20238 -0.50016,0.25356 0.35639,2.49422 -0.62382,0.24345 -0.41402,-2.49194 -0.55839,0.17851 0.2262,2.76603 -0.76938,0.32268 -0.25788,-2.86764 -0.4578,-0.0181 -0.16611,2.6524 -0.65997,0.26329 -0.0712,-4.56643 -0.34158,-0.19428 -1.35316,1.68368 -0.32832,-0.34355 0.72644,-2.0551 z" />
            </svg>
        </div>
        <div class="divForm form-group col-8">
            <div class="row mt-2">
                <div class="form-group col-4">
                    <p>
                        <input {{ isset($registroAccidente->form4AreaCabeza) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaCabeza" name="form4AreaCabeza" onclick="Body('Cabeza')" />
                        <label for="form4AreaCabeza">Cabeza</label>
                    </p>
                    <p>
                        <input {{ isset($registroAccidente->form4AreaCuello) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaCuello" name="form4AreaCuello" onclick="Body('Cuello')" />
                        <label for="form4AreaCuello">Cuello</label>
                    </p>
                    <p>
                        <input {{ isset($registroAccidente->form4AreaHombro) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaHombro" name="form4AreaHombro" onclick="Body('Hombro')" />
                        <label for="form4AreaHombro">Hombro</label>
                    </p>
                    <p>
                        <input {{ isset($registroAccidente->form4AreaBrazoIzquierdo) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaBrazoIzquierdo" name="form4AreaBrazoIzquierdo" onclick="Body('Brazo Izquierdo')" />
                        <label for="form4AreaBrazoIzquierdo">Brazo Izquierdo</label>
                    </p>
                    <p>
                        <input {{ isset($registroAccidente->form4AreaBrazoDerecho) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaBrazoDerecho" name="form4AreaBrazoDerecho" onclick="Body('Brazo Derecho')" />
                        <label for="form4AreaBrazoDerecho">Brazo Derecho</label>
                    </p>

                </div>
                <div class="form-group col-4">
                    <p>
                        <input {{ isset($registroAccidente->form4AreaManoIzquierda) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaManoIzquierda" name="form4AreaManoIzquierda" onclick="Body('Mano Izquierda')" />
                        <label for="form4AreaManoIzquierda">Mano Izquierda</label>
                    </p>
                    <p>
                        <input {{ isset($registroAccidente->form4AreaManoDerecha) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaManoDerecha" name="form4AreaManoDerecha" onclick="Body('Mano Derecha')" />
                        <label for="form4AreaManoDerecha">Mano Derecha</label>
                    </p>
                    <p>
                        <input {{ isset($registroAccidente->form4AreaPecho) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaPecho" name="form4AreaPecho" onclick="Body('Pecho')" />
                        <label for="form4AreaPecho">Pecho</label>
                    </p>
                    <p>
                        <input {{ isset($registroAccidente->form4AreaTorax) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaTorax" name="form4AreaTorax" onclick="Body('Costillas')" />
                        <label for="form4AreaTorax">Torax</label>
                    </p>
                    <p>
                        <input {{ isset($registroAccidente->form4AreaEstomago) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaEstomago" name="form4AreaEstomago" onclick="Body('Estomago')" />
                        <label for="form4AreaEstomago">Estomago</label>
                    </p>
                </div>
                <div class="form-group col-4">
                    <p>
                        <input {{ isset($registroAccidente->form4AreaGenital) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaGenital" name="form4AreaGenital" onclick="Body('Area Genital')" />
                        <label for="form4AreaGenital">Area Genital</label>
                    </p>
                    <p>
                        <input {{ isset($registroAccidente->form4AreaPiernaIzquierda) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaPiernaIzquierda" name="form4AreaPiernaIzquierda" onclick="Body('Pierna Izquierdo')" />
                        <label for="form4AreaPiernaIzquierda">Pierna Izquierdo</label>
                    </p>
                    <p>
                        <input {{ isset($registroAccidente->form4AreaPieIzquierdo) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaPieIzquierdo" name="form4AreaPieIzquierdo" onclick="Body('Pie Izquierdo')" />
                        <label for="form4AreaPieIzquierdo">Pie Izquierdo</label>
                    </p>
                    <p>
                        <input {{ isset($registroAccidente->form4AreaPieDerecho) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaPieDerecho" name="form4AreaPieDerecho" onclick="Body('Pie Derecho')" />
                        <label for="form4AreaPieDerecho">Pie Derecho</label>
                    </p>
                    <p>
                        <input {{ isset($registroAccidente->form4AreaPiernaDerecha) == 'on' ? 'checked' : '' }} type="checkbox" id="form4AreaPiernaDerecha" name="form4AreaPiernaDerecha" onclick="Body('Pierna Derecha')" />
                        <label for="form4AreaPiernaDerecha">Pierna Derecha</label>
                    </p>
                </div>
                <div class="form-group col-4">
                    <p>
                        <input {{ isset($registroAccidente->form4SinLesion) == 'on' ? 'checked' : '' }} type="checkbox" id="form4SinLesion" name="form4SinLesion" onclick="Body('Sin Lesiones')" />
                        <label for="form4SinLesion">Sin lesiones</label>
                    </p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-group col">
                    <div class="form-group">
                        <label for="form4DescripcionAreaAfectada">Descripcion del area afectada:</label>
                        <textarea name="form4DescripcionAreaAfectada" id="form4DescripcionAreaAfectada" class="form-control" rows="4">
                        {{isset($registroAccidente->form4DescripcionAreaAfectada)?$registroAccidente->form4DescripcionAreaAfectada:''}}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>