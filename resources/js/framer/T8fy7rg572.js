var __dai_window=typeof window!=="undefined"?window:undefined;var __dai_navigator=typeof __dai_window!=="undefined"?navigator:undefined;

// http-url:https://framerusercontent.com/modules/obz3b6zykwX1JdRaS1Cw/dpwjfs7GnorHyTi7k8FO/t8fy7Rg57.js
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
var svg = '<svg display="block" role="presentation" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M 0 6 C 0.94 2.54 4.94 0 8.5 0 C 12.06 0 14.56 2.54 15.5 6 C 14.56 9.47 12.06 12 8.5 12 C 4.94 12 0.94 9.47 0 6 Z" fill="transparent" height="12px" id="gEjGf6ty1" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(6.5 6)" width="15.5px"/><path d="M 0 0 L 0 0.5" fill="transparent" height="1px" id="QAf0CT07e" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(18 12)" width="1px"/><path d="M 2.005 11.86 C -0.668 8.359 -0.668 3.501 2.005 0" fill="transparent" height="11.86px" id="LFRwoi_s2" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(13.995 6.07)" width="2.0054652425274053px"/><path d="M 5.001 5.17 C 5.001 2.5 3.581 0.47 0.731 0 C -0.269 1.5 -0.269 5 0.961 6.5 C -0.279 8 -0.279 11.5 0.731 13 C 3.581 12.53 5.001 10.5 5.001 7.83" fill="transparent" height="13px" id="BmEMhXcps" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(1.999 5.5)" width="5.000958020484589px"/><path d="M 2.46 4.26 C 2.2 2.88 1.17 1.24 0 0 L 5.8 0 C 6.78 -0.004 7.618 0.703 7.78 1.67 L 8.01 3.07" fill="transparent" height="4.26001392346393px" id="MyL87rmQ_" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(8 3)" width="8.010000000000002px"/><path d="M 6.51 0.91 L 6.28 2.31 C 6.118 3.277 5.28 3.984 4.3 3.98 L 0 3.98 C 0.969 2.881 1.499 1.465 1.49 0" fill="transparent" height="3.9800139234639325px" id="e_NgutpBm" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(9.5 17.02)" width="6.510000000000002px"/></svg>';
var getProps = ({ color, height, id, width, width1, ...props }) => {
  return { ...props, JEeZYcamG: width1 ?? props.JEeZYcamG ?? 2, P_DcoRcrY: color ?? props.P_DcoRcrY ?? "rgb(0, 0, 0)" };
};
var Component = /* @__PURE__ */ React.forwardRef(function(props, ref) {
  const { style, className, layoutId, variant, P_DcoRcrY, JEeZYcamG, ...restProps } = getProps(props);
  const href = useSVGTemplate("3288123927", svg);
  return /* @__PURE__ */ _jsx(SVG, { ...restProps, className: cx("framer-CtE4W", className), layoutId, ref, role: "presentation", style: { "--1m973uw": P_DcoRcrY, "--js9iwy": JEeZYcamG, ...style }, viewBox: "0 0 24 24", children: /* @__PURE__ */ _jsx("use", { href }) });
});
var css = [`.framer-CtE4W { -webkit-mask: ${mask}; aspect-ratio: 1; display: block; mask: ${mask}; width: 24px; }`];
var Icon = withCSS(Component, css, "framer-CtE4W");
Icon.displayName = "Fish";
var t8fy7Rg57_default = Icon;
addPropertyControls(Icon, { P_DcoRcrY: { defaultValue: "rgb(0, 0, 0)", hidden: false, title: "Color", type: ControlType.Color }, JEeZYcamG: { defaultValue: 2, displayStepper: true, hidden: false, max: 16, min: 1, title: "Width", type: ControlType.Number } });
var __FramerMetadata__ = { "exports": { "default": { "type": "reactComponent", "name": "Icon", "slots": [], "annotations": { "framerSupportedLayoutWidth": "any-prefer-fixed", "framerImmutableVariables": "true", "framerIntrinsicHeight": "24", "framerIntrinsicWidth": "24", "framerSupportedLayoutHeight": "any-prefer-fixed", "framerContractVersion": "1", "framerVector": '{"name":"Fish","color":{"type":"variable","value":"1m973uw"},"set":{"localId":"vectorSet/ZsiCCGPvG","id":"ZsiCCGPvG","moduleId":"Y7SpbVH16cWqMhj75z1M"}}', "framerVariables": '{"P_DcoRcrY":"color","JEeZYcamG":"width1"}' } }, "__FramerMetadata__": { "type": "variable" } } };
export {
  __FramerMetadata__,
  t8fy7Rg57_default as default
};
