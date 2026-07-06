var __dai_window=typeof window!=="undefined"?window:undefined;var __dai_navigator=typeof __dai_window!=="undefined"?navigator:undefined;

// http-url:https://framerusercontent.com/modules/gdMr2MVLlKtC96H5m6Oy/VE7Y2Gp0pv85OHHIZubl/gkHxP7jNo.js
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
var svg = '<svg display="block" role="presentation" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M 0 1 C 0.6 1.5 1.2 2 2.5 2 C 5 2 5 0 7.5 0 C 10.1 0 9.9 2 12.5 2 C 15 2 15 0 17.5 0 C 18.8 0 19.4 0.5 20 1" fill="transparent" height="2px" id="DcdM7f07O" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(2 5)" width="20px"/><path d="M 0 1 C 0.6 1.5 1.2 2 2.5 2 C 5 2 5 0 7.5 0 C 10.1 0 9.9 2 12.5 2 C 15 2 15 0 17.5 0 C 18.8 0 19.4 0.5 20 1" fill="transparent" height="2px" id="KfWGORAPg" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(2 11)" width="20px"/><path d="M 0 1 C 0.6 1.5 1.2 2 2.5 2 C 5 2 5 0 7.5 0 C 10.1 0 9.9 2 12.5 2 C 15 2 15 0 17.5 0 C 18.8 0 19.4 0.5 20 1" fill="transparent" height="2px" id="d3Gc3qzy8" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(2 17)" width="20px"/></svg>';
var getProps = ({ color, height, id, width, width1, ...props }) => {
  return { ...props, JEeZYcamG: width1 ?? props.JEeZYcamG ?? 2, P_DcoRcrY: color ?? props.P_DcoRcrY ?? "rgb(0, 0, 0)" };
};
var Component = /* @__PURE__ */ React.forwardRef(function(props, ref) {
  const { style, className, layoutId, variant, P_DcoRcrY, JEeZYcamG, ...restProps } = getProps(props);
  const href = useSVGTemplate("1599702575", svg);
  return /* @__PURE__ */ _jsx(SVG, { ...restProps, className: cx("framer-5MeUP", className), layoutId, ref, role: "presentation", style: { "--1m973uw": P_DcoRcrY, "--js9iwy": JEeZYcamG, ...style }, viewBox: "0 0 24 24", children: /* @__PURE__ */ _jsx("use", { href }) });
});
var css = [`.framer-5MeUP { -webkit-mask: ${mask}; aspect-ratio: 1; display: block; mask: ${mask}; width: 24px; }`];
var Icon = withCSS(Component, css, "framer-5MeUP");
Icon.displayName = "Waves";
var gkHxP7jNo_default = Icon;
addPropertyControls(Icon, { P_DcoRcrY: { defaultValue: "rgb(0, 0, 0)", hidden: false, title: "Color", type: ControlType.Color }, JEeZYcamG: { defaultValue: 2, displayStepper: true, hidden: false, max: 16, min: 1, title: "Width", type: ControlType.Number } });
var __FramerMetadata__ = { "exports": { "default": { "type": "reactComponent", "name": "Icon", "slots": [], "annotations": { "framerContractVersion": "1", "framerIntrinsicWidth": "24", "framerSupportedLayoutWidth": "any-prefer-fixed", "framerVector": '{"name":"Waves","color":{"type":"variable","value":"1m973uw"},"set":{"localId":"vectorSet/ZsiCCGPvG","id":"ZsiCCGPvG","moduleId":"Y7SpbVH16cWqMhj75z1M"}}', "framerIntrinsicHeight": "24", "framerSupportedLayoutHeight": "any-prefer-fixed", "framerVariables": '{"P_DcoRcrY":"color","JEeZYcamG":"width1"}', "framerImmutableVariables": "true" } }, "__FramerMetadata__": { "type": "variable" } } };
export {
  __FramerMetadata__,
  gkHxP7jNo_default as default
};
