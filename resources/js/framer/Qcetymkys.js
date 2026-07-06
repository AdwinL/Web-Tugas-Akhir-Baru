var __dai_window=typeof window!=="undefined"?window:undefined;var __dai_navigator=typeof __dai_window!=="undefined"?navigator:undefined;

// http-url:https://framerusercontent.com/modules/3XaTqPeGTki45mHMK5uU/kDvAHj6U8xzcHAdzdI2I/QCeTYMKys.js
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
var svg = '<svg display="block" role="presentation" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M 3 1 C 3 0.448 3.448 0 4 0 L 6 0 C 6.552 0 7 0.448 7 1 L 7 3 C 7 4.298 7.421 5.561 8.2 6.6 L 8.8 7.4 C 9.579 8.439 10 9.702 10 11 L 10 19 C 10 19.552 9.552 20 9 20 L 1 20 C 0.448 20 0 19.552 0 19 L 0 11 C 0 9.702 0.421 8.439 1.2 7.4 L 1.8 6.6 C 2.579 5.561 3 4.298 3 3 Z" fill="transparent" height="20px" id="bQ9z_24IO" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(7 2)" width="10px"/><path d="M 5 0 L 1 0 C 0.448 0 0 0.448 0 1 L 0 4 C 0 4.552 0.448 5 1 5 L 5 5" fill="transparent" height="5px" id="cvJWe_yzE" stroke-dasharray="" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--js9iwy, 2)" stroke="var(--1m973uw, rgb(0,0,0))" transform="translate(12 13)" width="5px"/></svg>';
var getProps = ({ color, height, id, width, width1, ...props }) => {
  return { ...props, JEeZYcamG: width1 ?? props.JEeZYcamG ?? 2, P_DcoRcrY: color ?? props.P_DcoRcrY ?? "rgb(0, 0, 0)" };
};
var Component = /* @__PURE__ */ React.forwardRef(function(props, ref) {
  const { style, className, layoutId, variant, P_DcoRcrY, JEeZYcamG, ...restProps } = getProps(props);
  const href = useSVGTemplate("2696064028", svg);
  return /* @__PURE__ */ _jsx(SVG, { ...restProps, className: cx("framer-jKNoW", className), layoutId, ref, role: "presentation", style: { "--1m973uw": P_DcoRcrY, "--js9iwy": JEeZYcamG, ...style }, viewBox: "0 0 24 24", children: /* @__PURE__ */ _jsx("use", { href }) });
});
var css = [`.framer-jKNoW { -webkit-mask: ${mask}; aspect-ratio: 1; display: block; mask: ${mask}; width: 24px; }`];
var Icon = withCSS(Component, css, "framer-jKNoW");
Icon.displayName = "Bottle Wine";
var QCeTYMKys_default = Icon;
addPropertyControls(Icon, { P_DcoRcrY: { defaultValue: "rgb(0, 0, 0)", hidden: false, title: "Color", type: ControlType.Color }, JEeZYcamG: { defaultValue: 2, displayStepper: true, hidden: false, max: 16, min: 1, title: "Width", type: ControlType.Number } });
var __FramerMetadata__ = { "exports": { "default": { "type": "reactComponent", "name": "Icon", "slots": [], "annotations": { "framerImmutableVariables": "true", "framerIntrinsicWidth": "24", "framerSupportedLayoutHeight": "any-prefer-fixed", "framerIntrinsicHeight": "24", "framerVector": '{"name":"Bottle Wine","color":{"type":"variable","value":"1m973uw"},"set":{"localId":"vectorSet/ZsiCCGPvG","id":"ZsiCCGPvG","moduleId":"Y7SpbVH16cWqMhj75z1M"}}', "framerVariables": '{"P_DcoRcrY":"color","JEeZYcamG":"width1"}', "framerSupportedLayoutWidth": "any-prefer-fixed", "framerContractVersion": "1" } }, "__FramerMetadata__": { "type": "variable" } } };
export {
  __FramerMetadata__,
  QCeTYMKys_default as default
};
