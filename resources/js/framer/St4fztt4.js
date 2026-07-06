var __dai_window=typeof window!=="undefined"?window:undefined;var __dai_navigator=typeof __dai_window!=="undefined"?navigator:undefined;

// http-url:https://framerusercontent.com/modules/gltP9ifiTxuUDqktMPPj/TpMNnPSr67TxXdimLN7u/sT4fztT_4.js
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
var svg = '<svg display="block" role="presentation" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M 0 0 L 0 4" fill="transparent" height="4px" id="Ic0r_PtI_" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(8 2)" width="1px"/><path d="M 0 0 L 0 4" fill="transparent" height="4px" id="hClrFJeHP" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(16 2)" width="1px"/><path d="M 2 18 C 0.895 18 0 17.105 0 16 L 0 2 C 0 0.895 0.895 0 2 0 L 16 0 C 17.105 0 18 0.895 18 2 L 18 16 C 18 17.105 17.105 18 16 18 Z" fill="transparent" height="18px" id="gMlvtypDg" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(3 4)" width="18px"/><path d="M 0 0 L 18 0" fill="transparent" height="1px" id="T45H70pbG" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(3 10)" width="18px"/><path d="M 0 0 L 0.01 0" fill="transparent" height="1px" id="P8B9DlsLE" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(8 14)" width="1px"/><path d="M 0 0 L 0.01 0" fill="transparent" height="1px" id="i5_yi1SBn" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(12 14)" width="1px"/><path d="M 0 0 L 0.01 0" fill="transparent" height="1px" id="YEmEBn255" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(16 14)" width="1px"/><path d="M 0 0 L 0.01 0" fill="transparent" height="1px" id="fyXCV7ZfB" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(8 18)" width="1px"/><path d="M 0 0 L 0.01 0" fill="transparent" height="1px" id="g2JsudC57" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(12 18)" width="1px"/><path d="M 0 0 L 0.01 0" fill="transparent" height="1px" id="VUFc1VnyW" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(16 18)" width="1px"/></svg>';
var getProps = ({ color, height, id, width, width1, ...props }) => {
  return { ...props, JEeZYcamG: width1 ?? props.JEeZYcamG ?? 2, P_DcoRcrY: color ?? props.P_DcoRcrY ?? "rgb(0, 0, 0)" };
};
var Component = /* @__PURE__ */ React.forwardRef(function(props, ref) {
  const { style, className, layoutId, variant, P_DcoRcrY, JEeZYcamG, ...restProps } = getProps(props);
  const href = useSVGTemplate("152160681", svg);
  return /* @__PURE__ */ _jsx(SVG, { ...restProps, className: cx("framer-mhihM", className), layoutId, ref, role: "presentation", style: { "--1m973uw": P_DcoRcrY, "--js9iwy": JEeZYcamG, ...style }, viewBox: "0 0 24 24", children: /* @__PURE__ */ _jsx("use", { href }) });
});
var css = [`.framer-mhihM { -webkit-mask: ${mask}; aspect-ratio: 1; display: block; mask: ${mask}; width: 24px; }`];
var Icon = withCSS(Component, css, "framer-mhihM");
Icon.displayName = "Calendar Days";
var sT4fztT_4_default = Icon;
addPropertyControls(Icon, { P_DcoRcrY: { defaultValue: "rgb(0, 0, 0)", hidden: false, title: "Color", type: ControlType.Color }, JEeZYcamG: { defaultValue: 2, displayStepper: true, hidden: false, max: 16, min: 1, title: "Width", type: ControlType.Number } });
var __FramerMetadata__ = { "exports": { "default": { "type": "reactComponent", "name": "Icon", "slots": [], "annotations": { "framerIntrinsicWidth": "24", "framerImmutableVariables": "true", "framerSupportedLayoutHeight": "any-prefer-fixed", "framerSupportedLayoutWidth": "any-prefer-fixed", "framerVariables": '{"P_DcoRcrY":"color","JEeZYcamG":"width1"}', "framerVector": '{"name":"Calendar Days","color":{"type":"variable","value":"1m973uw"},"set":{"localId":"vectorSet/ZsiCCGPvG","id":"ZsiCCGPvG","moduleId":"Y7SpbVH16cWqMhj75z1M"}}', "framerIntrinsicHeight": "24", "framerContractVersion": "1" } }, "__FramerMetadata__": { "type": "variable" } } };
export {
  __FramerMetadata__,
  sT4fztT_4_default as default
};
