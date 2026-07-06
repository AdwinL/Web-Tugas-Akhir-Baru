var __dai_window=typeof window!=="undefined"?window:undefined;var __dai_navigator=typeof __dai_window!=="undefined"?navigator:undefined;

// http-url:https://framerusercontent.com/modules/F2E5pmKVtMVQKiO6pG1S/5zwJzk565b7zENTA2NF2/oGJenW4Bb.js
import { jsx as _jsx } from "react/jsx-runtime";
import { addPropertyControls, ControlType, cx, motion, useSVGTemplate, withCSS } from "./_framer-runtime.js";
import * as React from "react";
import { forwardRef as forwardRef2 } from "react";
var mask = "var(--framer-icon-mask)";
var Base = /* @__PURE__ */ forwardRef2(function(props, ref) {
  return /* @__PURE__ */ _jsx("svg", { ...props, ref, children: props.children });
});
var MotionSVG = motion.create(Base);
var SVG = /* @__PURE__ */ forwardRef2((props, ref) => {
  const { animated, layoutId, children, ...rest } = props;
  return animated ? /* @__PURE__ */ _jsx(MotionSVG, { ...rest, layoutId, ref, children }) : /* @__PURE__ */ _jsx("svg", { ...rest, ref, children });
});
var svg = '<svg display="block" role="presentation" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M 14.003 18.004 C 14.555 18.004 15.003 17.556 15.003 17.004 L 15.003 11.654 C 15.003 11.197 15.319 10.81 15.73 10.613 C 17.486 9.775 18.385 7.794 17.858 5.92 C 17.331 4.046 15.532 2.824 13.596 3.024 C 12.806 1.189 11 0 9.003 0 C 7.005 0 5.199 1.189 4.41 3.024 C 2.474 2.825 0.677 4.047 0.15 5.92 C -0.377 7.793 0.52 9.773 2.276 10.612 C 2.687 10.81 3.003 11.197 3.003 11.653 L 3.003 17.004 C 3.003 17.556 3.45 18.004 4.003 18.004 Z" fill="transparent" height="18.004056934018593px" id="MLZtapRJY" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(2.997 2.996)" width="18.00793318382002px"/><path d="M 0 0 L 12 0" fill="transparent" height="1px" id="oi7SzhAhD" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(6 17)" width="12px"/></svg>';
var getProps = ({ color, height, id, width, width1, ...props }) => {
  return { ...props, JEeZYcamG: width1 ?? props.JEeZYcamG ?? 2, P_DcoRcrY: color ?? props.P_DcoRcrY ?? "rgb(0, 0, 0)" };
};
var Component = /* @__PURE__ */ React.forwardRef(function(props, ref) {
  const { style, className, layoutId, variant, P_DcoRcrY, JEeZYcamG, ...restProps } = getProps(props);
  const href = useSVGTemplate("2039653531", svg);
  return /* @__PURE__ */ _jsx(SVG, { ...restProps, className: cx("framer-TcAmO", className), layoutId, ref, role: "presentation", style: { "--1m973uw": P_DcoRcrY, "--js9iwy": JEeZYcamG, ...style }, viewBox: "0 0 24 24", children: /* @__PURE__ */ _jsx("use", { href }) });
});
var css = [`.framer-TcAmO { -webkit-mask: ${mask}; aspect-ratio: 1; display: block; mask: ${mask}; width: 24px; }`];
var Icon = withCSS(Component, css, "framer-TcAmO");
Icon.displayName = "Chef Hat";
var oGJenW4Bb_default = Icon;
addPropertyControls(Icon, { P_DcoRcrY: { defaultValue: "rgb(0, 0, 0)", hidden: false, title: "Color", type: ControlType.Color }, JEeZYcamG: { defaultValue: 2, displayStepper: true, hidden: false, max: 16, min: 1, title: "Width", type: ControlType.Number } });
var __FramerMetadata__ = { "exports": { "default": { "type": "reactComponent", "name": "Icon", "slots": [], "annotations": { "framerIntrinsicWidth": "24", "framerIntrinsicHeight": "24", "framerContractVersion": "1", "framerVariables": '{"P_DcoRcrY":"color","JEeZYcamG":"width1"}', "framerImmutableVariables": "true", "framerVector": '{"name":"Chef Hat","color":{"type":"variable","value":"1m973uw"},"set":{"localId":"vectorSet/ZsiCCGPvG","id":"ZsiCCGPvG","moduleId":"Y7SpbVH16cWqMhj75z1M"}}', "framerSupportedLayoutWidth": "any-prefer-fixed", "framerSupportedLayoutHeight": "any-prefer-fixed" } }, "__FramerMetadata__": { "type": "variable" } } };
export {
  __FramerMetadata__,
  oGJenW4Bb_default as default
};
