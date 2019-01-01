var margin = {top: 20, right: 20, bottom: 30, left: 40},
    width = 700 - margin.left - margin.right,
    height = 500 - margin.top - margin.bottom;

/* 
 * value accessor - returns the value to encode for a given data object.
 * scale - maps value to a visual display encoding, such as a pixel position.
 * map function - maps from data value to display value
 * axis - sets up axis
 */ 
var prefix_array= new Array();
function get_name_prefix_number(name){
    var name_prefix = name.substr(0, name.length - 1);
    for(var i = 0; i < prefix_array.length; i++){
        if( prefix_array[i] === name_prefix )
            return i;
    }
    prefix_array[prefix_array.length] = name_prefix;
    return prefix_array.length - 1;
}
// setup x 
var xValue = function(d) {
        return Math.floor((Math.random() * 100) + 2);
    }, // data -> value
    xScale = d3.scale.linear().range([0, width]), // value -> display
    xMap = function(d) {
        return xScale(xValue(d));
    }, // data -> display
    xAxis = d3.svg.axis().scale(xScale).orient("bottom");

// setup y
var yValue = function(d) {
//        return get_name_prefix_number(d.name);
        return Math.floor((Math.random() * 100) + 2);
//        return d["Protein (g)"];
    }, // data -> value
    yScale = d3.scale.linear().range([height, 0]), // value -> display
    yMap = function(d) { return yScale(yValue(d));}, // data -> display
    yAxis = d3.svg.axis().scale(yScale).orient("left");

// setup fill color
var cValue = function(d) {
        name = d.name;
        content = d.content;
        name_serial = name.substr(name.length - 2);
        return name_serial.substr(0, 1);
//        return d.Manufacturer;
    },
    color = d3.scale.category10();

// add the graph canvas to the body of the webpage

var svg = d3.select("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

// add the tooltip area to the webpage
var tooltip = d3.select("body").append("div")
    .attr("class", "tooltip")
    .style("opacity", 0);

var criteria=['Arze','Escalante','Safrygin','Sufaat'];

// By using entities creating Document Entitiy matrix
function getCriteria(data, content){
    for(var i = 0; i < criteria.length; i++){
        if(content.indexOf(criteria[i]) !== -1)
            return criteria[i];
    }
    
    for(var i=0; i<=data.length/2;i++){
        if(new String(data[i].content).indexOf(content) !== -1){
            return "unleft";
        }
    }
    return "unright";
}

//Applying Multidimentional Scaling
var mds;
mds = function(distances, dimensions) {
    dimensions = dimensions || 2;

    // square distances
    var M = numeric.mul(-.5, numeric.pow(distances, 2));

    // double centre the rows/columns
    function mean(A) { return numeric.div(numeric.add.apply(null, A), A.length); }
    var rowMeans = mean(M),
        colMeans = mean(numeric.transpose(M)),
        totalMean = mean(rowMeans);

    for (var i = 0; i < M.length; ++i) {
        for (var j =0; j < M[0].length; ++j) {
            M[i][j] += totalMean - rowMeans[i] - colMeans[j];
        }
    }

    // take the SVD of the double centred matrix, and return the
    // points from it
    var ret = numeric.svd(M),
        eigenValues = numeric.sqrt(ret.S);
    return ret.U.map(function(row) {
        return numeric.mul(row, eigenValues).splice(0, dimensions);
    });
};

// load data
d3.json("getFiles.php", function(error, data) {

    var tmp_data = new Array();
  // change string (from CSV) into number format for plotting graph
    data.forEach(function(d) {      
        if(d.name !== "." && d.name !== ".."){
          tmp_data[tmp_data.length] = d;
        }

  });
  data = tmp_data;

  // don't want dots overlapping axis, so add in buffer to data domain
  xScale.domain([d3.min(data, xValue)-1, d3.max(data, xValue)+1]);
  yScale.domain([d3.min(data, yValue)-1, d3.max(data, yValue)+1]);

  // x-axis
  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis)
    .append("text")
      .attr("class", "label")
      .attr("x", width)
      .attr("y", -6)
      .style("text-anchor", "end")
      .text("");

  // y-axis
  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
    .append("text")
      .attr("class", "label")
      .attr("transform", "rotate(-90)")
      .attr("y", 6)
      .attr("dy", ".71em")
      .style("text-anchor", "end")
      .text("");

  // draw dots
  svg.selectAll(".dot")
      .data(data)
    .enter().append("circle")
      .attr("class", "dot")
      .attr("r", 3.5)
      .attr("cx", xMap)
      .attr("cy", yMap)
      .style("fill", function(d) { return color(cValue(d));}) 
      .on("mouseover", function(d) {
          tooltip.transition()
               .duration(200)
               .style("opacity", .9);
          tooltip.html(d["name"])
               .style("left", (d3.event.pageX + 5) + "px")
               .style("top", (d3.event.pageY - 28) + "px");
      })
      .on("mouseout", function(d) {
          tooltip.transition()
               .duration(500)
               .style("opacity", 0);
      })
    .on("click", function(d) {
        var found = false;
        var clusterName = getCriteria(data, new String(d.content));
        let lis=$('.sortable').filter('[clusters="'+clusterName+'"]').find('li');
        for(let i=0;i<lis.length;i++){
            if(lis.eq(i).attr('cluster')== new String(d.name)){
                lis.eq(i).remove();
                found = true;
            }
        }
        if(!found){
            let li=$('<li cluster="'+d.name+'">'+d.content+'</li>');
            $('.sortable').filter('[clusters="'+clusterName+'"]').append(li);
        }
        
        let spans=$('.sortable').filter('[cluster="'+clusterName+'"]').find('span');
        let inputs=$('.sortable').filter('[cluster="'+clusterName+'"]').find('input');
        for(let i=0;i<spans.length;i++){
            if($(spans[i]).text() == new String(d.name)){
                if(found){
                    $(spans[i]).parent().removeClass("active");
                    $(inputs[i]).attr("checked", false);
                }else{
                    $(spans[i]).parent().addClass("active");
                    $(inputs[i]).attr("checked", true);
                }
            }
        }
      });
});


