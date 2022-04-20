
var registerBlockType = wp.blocks.registerBlockType;

registerBlockType("cdfortes/firstblock", {
  edit: function () {
    return "Edit";
  },
  save: function () {
    return "Save";
  },
});