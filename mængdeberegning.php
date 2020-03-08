<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <title>Mængde beregner</title>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <?php
        require 'load.php';
    ?>
    <link rel="icon" type="image/png" href="calculator-solid.svg"/>
</head>
<body>
    <div>
        <h2>Mængde beregner</h3>
        <a class="btn btn-info" href="index.php">Forside</a>
        <!--<label class="label1">Bil</label>
            <div class="form-group">
                <select name="carSelect" class="form-control1 form-control">
                </select>
                <span class="help-block" style="width:13em"></span>
            </div>-->
    </div>
    <div>
        <input id="stofAmount" type="number" placeholder="2" value="2" min="2" max="4" oninput="updateTableAmountStart(value); if (document.getElementById('stofAmount').value >= 4) {document.getElementById('stofAmount').value = 4}"></input>
        <input id="endStofAmount" type="number" placeholder="1" value="1" min="1" max="4" oninput="updateTableAmountEnd(value); if (document.getElementById('stofAmount').value >= 4) {document.getElementById('stofAmount').value = 4}"></input>
        <button class="btn btn-success" onclick="generate()">Opret tabel</button>
        <table>
            <tr>
                <div id="stof1Div">
                <th id="stof1A"><input id="stof1AI" type="number" min="1" placeholder="antal" value=""></input></th>
                <th id="stof1N"><input id="stof1NI" type="text" placeholder="stof navn"></input></th>
                </div>
                <div id="stof2Div">
                <th id="stof2P">+</th>
                <th id="stof2A"><input id="stof2AI" type="number" min="1" placeholder="antal" value=""></input></th>
                <th id="stof2N"><input id="stof2AI" type="text" placeholder="stof navn"></input></th>
                </div>
                <div id="stof3Div">
                </div>
                <div id="stof4Div">
                </div>
                <th id="ligmed">=</th>
                <div id="endStof1Div">
                <th id="endStof1A"><input id="endStof1AI" type="number" min="1" placeholder="antal" value=""></input></th>
                <th id="endStof1N"><input id="endStof1NI" type="text" placeholder="stof navn"></input></th>
                </div>
                <div id="stof2Div">
                </div>
                <div id="stof3Div">
                </div>
                <div id="stof4Div">
                </div>
            </tr>
        </table>
    </div>
    <script>
        function updateTableAmountStart(value) {
            document.getElementById("stof"+value+"Div").innerhtml
        }
        function updateTableAmountEnd(value) {

        }
    </script>
</body>
</html>