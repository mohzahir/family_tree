import { VNode } from "../../ts-common/dom";
import { View } from "../../ts-common/view";
export declare class ShapesBar extends View {
    private _htmlEvents;
    private _shadow;
    private _dropdowns;
    private _shapes;
    private _defaults;
    private _pressedShapeInfo;
    private _pull;
    constructor(container: VNode, config: any);
    private _handleMove;
    private _handleUp;
    private _toggle;
    private _getTextIcon;
    private _wrapDropdown;
    private _getShadow;
    private _getWrapped;
    private getGroupNode;
    private getSwimlaneNode;
    private _shapeInit;
    private _barCreator;
    private _getShapeSection;
    private _addToPull;
    private _render;
}
